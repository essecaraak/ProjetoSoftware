document.addEventListener("DOMContentLoaded", function() {
    var statusSelects = document.querySelectorAll(".status");

    statusSelects.forEach(function(select) {
        select.addEventListener("change", function() {
            var selectedOption = this.value;
            var detailsToShow = this.options[this.selectedIndex].dataset.show;

            var allDetails = document.querySelectorAll(".status-details");
            allDetails.forEach(function(detail) {
                detail.style.display = "none";
            });

            var detailsToShowElements = document.querySelectorAll(detailsToShow);
            detailsToShowElements.forEach(function(detail) {
                detail.style.display = "block";
            });
        });
    });
});
