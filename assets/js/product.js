// accordion checkbox

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


// loading

let perPage = 12;
let currentPage = 1;

function showLoader() {
    document.getElementById("loader").style.display = "block";
}

function hideLoader() {
    document.getElementById("loader").style.display = "none";
}

function loadProducts(page = 1) {
    currentPage = page;
    showLoader();

    const params = new URLSearchParams({ page });

    
    for (const [group, values] of Object.entries(selectedFilters)) {
        if (values.length) params.append(group, values.join(','));
    }

    fetch(`fetch-products.php?${params.toString()}`)
        .then(response => response.json())
        .then(data => {
            renderProducts(data.products, false);
 
            renderPagination(data.total_pages, page);
            hideLoader();
        })
        .catch(err => {
            console.error(err);
            hideLoader();
        });
}



function renderProducts(products, append = false) {
    const container = document.getElementById("product-container");

    if (!append) container.innerHTML = ""; 

    products.forEach(product => {
        container.innerHTML += `
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card h-100 product-card" style="border:none;">
                    <img src="${product.img}" class="card-img-top">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title" style="color:#707070;">${product.title}</h5>
                        <p class="card-text" style="font-family:'Gotham'; color:#99ABB2; font-size:18px;">
                            ${product.desc}
                        </p>
                        <a href="product-page.php?id=${product.id}" class="btn buy-now-btn mt-auto" style="background-color:#139dd9;color:#fff;">Buy Now</a>
                    </div>
                </div>
            </div>
        `;
    });
}




function renderPagination(totalPages, currentPage) {
    const paginationContainer = document.getElementById("pagination");
    paginationContainer.innerHTML = "";

    function createPageButton(page) {
        const btn = document.createElement("button");
        btn.textContent = page;
        btn.classList.add("page-btn");
        if (page === currentPage) btn.classList.add("active");
        btn.addEventListener("click", () => loadProducts(page));
        return btn;
    }

    function addEllipsis() {
        const span = document.createElement("span");
        span.textContent = "...";
        span.classList.add("ellipsis");
        paginationContainer.appendChild(span);
    }

  
    paginationContainer.appendChild(createPageButton(1));


    if (currentPage > 3) {
        addEllipsis();
    }

  
    for (let p = currentPage - 1; p <= currentPage + 1; p++) {
        if (p > 1 && p < totalPages) {
            paginationContainer.appendChild(createPageButton(p));
        }
    }

  
    if (currentPage < totalPages - 2) {
        addEllipsis();
    }

   
    if (totalPages > 1) {
        paginationContainer.appendChild(createPageButton(totalPages));
    }
}




loadProducts(1);


