// متغيرات لتخزين API Key ومعرف القناة
const API_KEY = 'AIzaSyDte72qEfJ7lPPVGi385LUhmTIEDDF7rk8'; // ضع مفتاح API هنا
const CHANNEL_IDS = ['UCuwSnLeApjw5rUj3ckGW0Sg', 'UCwBPavvHo_CWS1R8Huwvilg', 'UCICu_9Wu5KU5BYnRfmVu5vg']; // معرف القناتين

// تحميل الفيديوهات من جميع القنوات
function fetchVideos(category = 'all') {
    const requests = CHANNEL_IDS.map(channelId => {
        const url = `https://www.googleapis.com/youtube/v3/search?key=${API_KEY}&channelId=${channelId}&part=snippet&type=video&maxResults=6&q=${category}`;
        return fetch(url).then(response => response.json());
    });

    // تنفيذ جميع الطلبات وجمع النتائج
    Promise.all(requests)
        .then(results => {
            let allVideos = [];
            results.forEach(data => {
                if (data.items && data.items.length > 0) {
                    allVideos = allVideos.concat(data.items);
                }
            });

            if (allVideos.length > 0) {
                displayVideos(allVideos);
            } else {
                console.error("No videos found.");
                document.getElementById('videos-container').innerHTML = "<p>لم يتم العثور على فيديوهات. حاول مرة أخرى لاحقًا.</p>";
            }
        })
        .catch(error => {
            console.error(" API Fetch Error:", error);
            document.getElementById('videos-container').innerHTML = "<p>حدث خطأ أثناء تحميل الفيديوهات.</p>";
        });
}

// عرض الفيديوهات على الصفحة
function displayVideos(videos) {
    const container = document.getElementById('videos-container');
    container.innerHTML = '';

    videos.forEach(video => {
        const videoId = video.id.videoId || (video.id && video.id.kind === "youtube#video" ? video.id : null);
        if (!videoId) return;

        const videoElement = document.createElement('div');
        videoElement.classList.add('video-box');
        videoElement.innerHTML = `
            <iframe width="100%" height="250" src="https://www.youtube.com/embed/${videoId}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h3>${video.snippet.title}</h3>
        `;
        container.appendChild(videoElement);
    });
}

// تحميل الفيديوهات عند تحميل الصفحة
document.addEventListener('DOMContentLoaded', () => {
    fetchVideos();
});

// تحديث الفيديوهات حسب الفئة
document.getElementById('filter-btn').addEventListener('click', () => {
    const category = document.getElementById('category').value;
    fetchVideos(category);
});
