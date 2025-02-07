function changeBackground(imageSrc){
    const backgroundContainer = document.getElementById('background-container');
    backgroundContainer.style.backgroundImage = `url(${imageSrc})`;
    backgroundContainer.style.backgroundSize = 'cover';
    backgroundContainer.style.backgroundRepeat = 'no-repeat';
    backgroundContainer.style.WebkitMaskImage = 'linear-gradient(to right, rgba(0, 0, 0, .2), rgba(0, 0, 0))';
    backgroundContainer.style.maskImage = 'linear-gradient(to right, rgba(0, 0, 0, .2 ), rgba(0, 0, 0))';
}