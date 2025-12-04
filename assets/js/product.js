document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll('.accordion-body input[type="checkbox"]');

    const selectedFilters = {};

    checkboxes.forEach(cb => {
        cb.addEventListener("change", function () {

            const category = this.closest('.accordion-item')
                .querySelector('.accordion-button')
                ?.id;

                console.warn(this.closest('.accordion-item')
                .querySelector('.accordion-button')?.id);

            const value = this.value;

            if (!selectedFilters[category]) {
                selectedFilters[category] = new Set();
            }

           
            if (this.checked) {
                selectedFilters[category].add(value);
            } else {
                selectedFilters[category].delete(value);
            }

        
            const paramReady = {};

            for (const [cat, setValues] of Object.entries(selectedFilters)) {
                const arr = [...setValues];
                if (arr.length > 0) {
                    paramReady[cat] = arr.join(",");   
                }
            }

            console.log(paramReady);

            const params = new URLSearchParams();

            for (const [key, value] of Object.entries(paramReady)) {
                params.append(key, value);
            }

            console.log('params', params.toString())
        });
    });
});


// clear part 
let selectedFilters = {};



document.querySelectorAll('.filterCheck').forEach(cb => {

    const group = cb.classList[1];
    const safeValue = cb.value.replace(/\s+/g, '_');

    if (!cb.id) cb.id = `${group}_${safeValue}`;

    cb.addEventListener('change', function () {
        if (!selectedFilters[group]) selectedFilters[group] = [];

        if (this.checked) {
            if (!selectedFilters[group].includes(this.value)) {
                selectedFilters[group].push(this.value);
            }
        } else {
            selectedFilters[group] =
                selectedFilters[group].filter(v => v !== this.value);
        }

        updateFilterTags();
        filterProducts();
    });
});




function updateFilterTags() {
    const container = document.getElementById('selectedFilters');
    container.innerHTML = '';

    for (const [group, values] of Object.entries(selectedFilters)) {
        values.forEach(val => {

           
            const checkbox = document.querySelector(`input.${group}[value="${val}"]`);
            const cbId = checkbox?.id;

            const tag = document.createElement('span');
            tag.className = 'filter-tag';

            tag.innerHTML = `
                ${val}
                <button 
                    type="button" 
                    class="remove-tag"
                    data-id="${cbId}">
                    &times;
                </button>
            `;

            container.appendChild(tag);
        });
    }

    
    container.querySelectorAll('.remove-tag').forEach(btn => {
        btn.addEventListener('click', function () {

            const cbId = this.getAttribute('data-id');
            removeByCheckboxId(cbId);

        });
    });
}




function removeByCheckboxId(cbId) {

    const checkbox = document.getElementById(cbId);
    if (!checkbox) return;

    const group = checkbox.classList[1];
    const val = checkbox.value;

    
    selectedFilters[group] =
        selectedFilters[group].filter(v => v !== val);

  
    checkbox.checked = false;

    updateFilterTags();
    filterProducts();
}




function clearAllFilters() {

    document.querySelectorAll('.filterCheck').forEach(cb => {
        cb.checked = false;
    });

    selectedFilters = {};

    updateFilterTags();
    filterProducts();
}


document.getElementById('clearFilters').addEventListener('click', function (e) {
    e.preventDefault();
    clearAllFilters();
});




function filterProducts() {
    console.log('Filtering products with:', selectedFilters);
}

