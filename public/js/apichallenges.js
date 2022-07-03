async function reloadApiImage() {
    const data = await getData('https://images-api.nasa.gov/search?q=moon&media_type=image');
    setNewData(data)
}

function setNewData(data) {
    const apiImage = document.getElementById('apiImage');
    const apiTitle = document.getElementById('apiTitle');
    const apiKeywords = document.getElementById('apiKeywords');
    apiImage.src = data['links'][0]['href'];
    apiImage.alt = data['data'][0]['title'];
    apiTitle.innerHTML = data['data'][0]['title']
    apiKeywords.innerHTML = '';
    data['data'][0]['keywords'].forEach((keyword) => {
        const keywordLi = document.createElement('li');
        keywordLi.innerHTML = keyword;
        apiKeywords.appendChild(keywordLi)
    })
}

async function getData(link) {
    const response = await fetch(link);
    const data = await response.json()

    return data['collection']['items'][randomInteger(0, 99)]
}

function randomInteger(min, max){
    return Math.round(Math.random() * (max - min) + min);
}

window.onload = () => {
    reloadApiImage()
    document.getElementById('reloadData').addEventListener('click', () => {
        reloadApiImage()
    })
}