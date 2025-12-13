document.addEventListener("DOMContentLoaded", function () {

    document.querySelectorAll("input[name='skin_type']").forEach(function (radio) {

        radio.addEventListener("change", function () {

            let selectedValue = this.value;

            console.log("Selected Skin Type:", selectedValue);

            let previewURL = "skin_calculator_step3.php?skin_type=" +
                             encodeURIComponent(selectedValue);

            console.log("Preview URL:", previewURL);
        });

    });

});
