function changeBackground(imageSrc){
    const backgroundContainer = document.getElementById('BackgroundContainer');
    backgroundContainer.style.backgroundImage = `url(${imageSrc})`;
    backgroundContainer.style.backgroundSize = 'cover';
    backgroundContainer.style.backgroundRepeat = 'no-repeat';
}