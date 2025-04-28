(function() {
    // Get the popup HTML from the URL query parameters
    var popupHtml = new URLSearchParams(window.location.search).get('popup_html');

    if (popupHtml) {
        // Create the overlay and popup content
        var popupOverlay = document.createElement('div');
        popupOverlay.style.position = 'fixed';
        popupOverlay.style.top = 0;
        popupOverlay.style.left = 0;
        popupOverlay.style.right = 0;
        popupOverlay.style.bottom = 0;
        popupOverlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
        popupOverlay.style.display = 'flex';
        popupOverlay.style.justifyContent = 'center';
        popupOverlay.style.alignItems = 'center';
        popupOverlay.style.zIndex = '9999';

        var popupContent = document.createElement('div');
        popupContent.style.backgroundColor = 'white';
        popupContent.style.padding = '20px';
        popupContent.style.borderRadius = '8px';
        popupContent.style.maxWidth = '500px';
        popupContent.style.width = '100%';
        popupContent.innerHTML = popupHtml;

        var closeButton = document.createElement('button');
        closeButton.innerText = 'Close';
        closeButton.style.position = 'absolute';
        closeButton.style.top = '10px';
        closeButton.style.right = '10px';
        closeButton.style.backgroundColor = 'red';
        closeButton.style.color = 'white';
        closeButton.style.border = 'none';
        closeButton.style.borderRadius = '50%';
        closeButton.style.width = '30px';
        closeButton.style.height = '30px';
        closeButton.style.cursor = 'pointer';

        closeButton.addEventListener('click', function() {
            popupOverlay.remove();
        });

        popupContent.appendChild(closeButton);
        popupOverlay.appendChild(popupContent);

        // Show the popup after 10 seconds
        setTimeout(function() {
            document.body.appendChild(popupOverlay);
        }, 10000); // 10 seconds
    }
})();
