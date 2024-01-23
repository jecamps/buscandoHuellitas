let map, popup, Popup;

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 19.4049740473815, lng: -98.99161830350053 },
        zoom: 15,
    });
    class Popup extends google.maps.OverlayView {
        position;
        containerDiv;
        constructor(position, content) {
            super();
            this.position = position;
            content.classList.add("popup-bubble");

            const bubbleAnchor = document.createElement("div");

            bubbleAnchor.classList.add("popup-bubble-anchor");
            bubbleAnchor.appendChild(content);
            this.containerDiv = document.createElement("div");
            this.containerDiv.classList.add("popup-container");
            this.containerDiv.appendChild(bubbleAnchor);
            Popup.preventMapHitsAndGesturesFrom(this.containerDiv);
        }
        onAdd() {
            this.getPanes().floatPane.appendChild(this.containerDiv);
        }
        onRemove() {
            if (this.containerDiv.parentElement) {
                this.containerDiv.parentElement.removeChild(this.containerDiv);
            }
        }
        draw() {
            const divPosition = this.getProjection().fromLatLngToDivPixel(
                this.position
            );
            const display =
                Math.abs(divPosition.x) < 4000 && Math.abs(divPosition.y) < 4000
                    ? "block"
                    : "none";

            if (display === "block") {
                this.containerDiv.style.left = divPosition.x + "px";
                this.containerDiv.style.top = divPosition.y + "px";
            }

            if (this.containerDiv.style.display !== display) {
                this.containerDiv.style.display = display;
            }
        }
    }

    popup = new Popup(
        new google.maps.LatLng(19.4049740473815, -98.99161830350053),
        document.getElementById("content")
    );
    popup.setMap(map);
}

window.initMap = initMap;