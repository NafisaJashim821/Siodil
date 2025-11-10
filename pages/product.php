<?php

$base_url = "http://localhost/siodil/"; // adjust according to your setup



$extra_css = [
    '../assets/css/siodil.css',
    '../assets/css/product.css'
];

$extra_js = [
    '../assets/js/siodil.js',
    '../assets/js/product.js',
];

$logoUrlOther = "../assets/images/logo.png";
$footerUrlOther = "../assets/images/SIODIL-White-Logo-small-01-1.png";


include_once('../partials/header.php');

?>
<section class="product-bg">
    <div class="container text-center">
        <div class="product-text">
            <h1>SKIN WELL BEING STARTS HERE</h1>
            <p>Get much more than your average skincare line</p>
        </div>
    </div>
</section>


<section class="all-products">
    <div class="container">
        <div class="row">
            <!-- ===== Left Sidebar (Accordion Filter) ===== -->
            <div class="col-md-3">
                <div class="filter-section">
                    <h2>All Products</h2>

                    <div class="accordion" id="productFilter">


                        <div class="accordion" id="productFilter">

                            <!-- By Line Up -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingLineup">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseLineup" aria-expanded="false"
                                        aria-controls="collapseLineup">
                                        By Line Up
                                    </button>
                                </h3>
                                <div id="collapseLineup" class="accordion-collapse collapse"
                                    aria-labelledby="headingLineup" data-bs-parent="#productFilter">
                                    <div class="accordion-body">
                                        <label><input type="checkbox"> Anti-Acne</label><br>
                                        <label><input type="checkbox"> Anti-Aging</label><br>
                                        <label><input type="checkbox"> Brightening</label><br>
                                        <label><input type="checkbox"> Depigmenting</label><br>
                                        <label><input type="checkbox"> Eye Care</label><br>
                                        <label><input type="checkbox"> Hair Care</label><br>
                                        <label><input type="checkbox"> Moisturizing</label><br>
                                        <label><input type="checkbox"> Sunscreen</label>
                                    </div>
                                </div>
                            </div>

                            <!-- By Category -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingCategory">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseCategory" aria-expanded="false"
                                        aria-controls="collapseCategory">
                                        By Category
                                    </button>
                                </h3>
                                <div id="collapseCategory" class="accordion-collapse collapse"
                                    aria-labelledby="headingCategory" data-bs-parent="#productFilter">
                                    <div class="accordion-body">
                                        <label><input type="checkbox"> Balm</label>-<br>
                                        <label><input type="checkbox"> Cleanser</label><br>
                                        <label><input type="checkbox"> Cream</label><br>
                                        <label><input type="checkbox"> Gel</label><br>
                                        <label><input type="checkbox"> Glycolic Cleanser</label><br>
                                        <label><input type="checkbox"> lotion</label><br>
                                        <label><input type="checkbox"> Mist</label><br>
                                        <label><input type="checkbox"> Serum</label><br>
                                        <label><input type="checkbox">Shampoo</label>

                                    </div>
                                </div>
                            </div>

                            <!-- By Ingredients -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingIngredients">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseIngredients" aria-expanded="false"
                                        aria-controls="collapseIngredients">
                                        By Ingredients
                                    </button>
                                </h3>
                                <div id="collapseIngredients" class="accordion-collapse collapse"
                                    aria-labelledby="headingIngredients" data-bs-parent="#productFilter">
                                    <div class="accordion-body">
                                        <label><input type="checkbox"> Alpha Arbutin</label><br>
                                        <label><input type="checkbox"> Chamomile Extract</label><br>
                                        <label><input type="checkbox"> Dipotassium Glycyrrhizinate</label><br>

                                        <label><input type="checkbox">Ethyl Ascorbic Acid</label><br>
                                        <label><input type="checkbox">Glycolic Acid</label><br>
                                        <label><input type="checkbox">Niacinamide</label><br>
                                        <label><input type="checkbox">Salicylic Acid</label><br>
                                        <label><input type="checkbox"> Sodium Hyaluronate</label> <br>
                                        <label><input type="checkbox">Sodium Pca</label>
                                    </div>
                                </div>
                            </div>

                            <!-- By Concern -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingConcern">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseConcern" aria-expanded="false"
                                        aria-controls="collapseConcern">
                                        By Concern
                                    </button>
                                </h3>
                                <div id="collapseConcern" class="accordion-collapse collapse"
                                    aria-labelledby="headingConcern" data-bs-parent="#productFilter">
                                    <div class="accordion-body">
                                        <label><input type="checkbox"> Acne / Pimples</label><br>
                                        <label><input type="checkbox"> Acne Spots</label><br>
                                        <label><input type="checkbox"> Clogged Pores</label><br>
                                        <label><input type="checkbox"> Danddruff and Dry scalp</label><br>
                                        <label><input type="checkbox"> Dark Circles</label><br>
                                        <label><input type="checkbox"> Dark Patches</label><br>
                                        <label><input type="checkbox"> Dark Spots</label><br>
                                        <label><input type="checkbox"> Dehydrated Skin</label><br>
                                        <label><input type="checkbox"> Dry Skkin</label><br>
                                        <label><input type="checkbox"> Dull Skin</label><br>
                                        <label><input type="checkbox"> Fine Lines</label><br>
                                        <label><input type="checkbox"> Freckles</label><br>
                                        <label><input type="checkbox"> Fungal Infections of the scalp</label><br>

                                        <label><input type="checkbox">Hair Fall</label><br>
                                        <label><input type="checkbox">Hyperpigmented Skin</label><br>
                                        <label><input type="checkbox">Inflamed</label><br>
                                        <label><input type="checkbox">Irritated</label><br>
                                        <label><input type="checkbox">Large Pores</label><br>
                                        <label><input type="checkbox">Loss of Elasticity</label><br>
                                        <label><input type="checkbox">Low Volume</label><br>
                                        <label><input type="checkbox">Moisturize and restore the skin's protective
                                            barrier </label><br>
                                        <label><input type="checkbox">Rough Hair</label><br>
                                        <label><input type="checkbox">Rough Skin Texture </label><br>
                                        <label><input type="checkbox">Rough Skin Texture </label> <br>
                                        <label><input type="checkbox">Skin Damage </label><br>
                                        <label><input type="checkbox">Skin Discoloraation</label><br>
                                        <label><input type="checkbox">Uneven Skin Tone </label><br>
                                        <label><input type="checkbox">Wrinkles </label>
                                    </div>

                                </div>
                            </div>

                            <!-- By Skin Type -->
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="headingSkinType">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSkinType" aria-expanded="false"
                                        aria-controls="collapseSkinType">
                                        By Skin Type
                                    </button>
                                </h3>
                                <div id="collapseSkinType" class="accordion-collapse collapse"
                                    aria-labelledby="headingSkinType" data-bs-parent="#productFilter">
                                    <div class="accordion-body">
                                        <label><input type="checkbox">Acne Scar</label><br>
                                        <label><input type="checkbox"> All Skin Type</label><br>
                                        <label><input type="checkbox">Any Scalp</label><br>
                                        <label><input type="checkbox"> Dry to very dry skin</label><br>
                                        <label><input type="checkbox">Fungal infected Scalp </label><br>
                                        <label><input type="checkbox">Hyperpigmented Skin </label><br>
                                        <label><input type="checkbox">Itchy & Dry Scalp</label><br>
                                        <label><input type="checkbox">Normal To Dry Skin </label><br>
                                        <label><input type="checkbox">Normal To Oily Skin </label><br>
                                        <label><input type="checkbox">Oily To Acne Prone Skin </label><br>
                                        <label><input type="checkbox">Sensetive & Dry Skin </label><br>


                                        <label><input type="checkbox">Sensetive Skin </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>



            <!-- ===== Right Grid ===== -->
            <div class="col-md-9">
                <div class="product-grid" id="productGrid">

                    <!-- card 1  -->
                    <a href="product-page.php" class="product-card-link">
                        <div class="product-card">
                            <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Product 1">
                            <h5>Anti-Acne</h5>
                            <h4>Acne Cleanser</h4>
                            <p>Deep cleanses and clears pores for smooth, healthy skin.</p>
                            <button>Learn More</button>
                        </div>
                    </a>


                    <!-- card 2 -->

                    <a href="product-page.html" class="product-card-link">
                        <div class="product-card">
                            <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Product 1">
                            <h5>Anti-Acne</h5>
                            <h4>Acne Cleanser</h4>
                            <p>Deep cleanses and clears pores for smooth, healthy skin.</p>
                            <button>Learn More</button>
                        </div>
                    </a>
                    <!-- card 3  -->

                    <a href="product-page.html" class="product-card-link">
                        <div class="product-card">
                            <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Product 1">
                            <h5>Anti-Acne</h5>
                            <h4>Acne Cleanser</h4>
                            <p>Deep cleanses and clears pores for smooth, healthy skin.</p>
                            <button>Learn More</button>
                        </div>
                    </a>

                    <!-- card 4   -->

                    <a href="product-page.html" class="product-card-link">
                        <div class="product-card">
                            <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Product 1">
                            <h5>Anti-Acne</h5>
                            <h4>Acne Cleanser</h4>
                            <p>Deep cleanses and clears pores for smooth, healthy skin.</p>
                            <button>Learn More</button>
                        </div>
                    </a>
                    <!-- card 5  -->

                    <div class="product-card">
                        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Product 1">
                        <h5>Anti-Acne</h5>
                        <h4>Acne Cleanser</h4>
                        <p>Deep cleanses and clears pores for smooth, healthy skin.</p>
                        <button>Learn More</button>
                    </div>

                    <!-- card 6   -->
                    <div class="product-card">
                        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Product 1">
                        <h5>Anti-Acne</h5>
                        <h4>Acne Cleanser</h4>
                        <p>Deep cleanses and clears pores for smooth, healthy skin.</p>
                        <button>Learn More</button>
                    </div>


                    <!-- card 7   -->
                    <div class="product-card">
                        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Product 1">
                        <h5>Anti-Acne</h5>
                        <h4>Acne Cleanser</h4>
                        <p>Deep cleanses and clears pores for smooth, healthy skin.</p>
                        <button>Learn More</button>
                    </div>

                    <!-- card 8   -->
                    <div class="product-card">
                        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Product 1">
                        <h5>Anti-Acne</h5>
                        <h4>Acne Cleanser</h4>
                        <p>Deep cleanses and clears pores for smooth, healthy skin.</p>
                        <button>Learn More</button>
                    </div>

                    <!-- card 9   -->
                    <div class="product-card">
                        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Product 1">
                        <h5>Anti-Acne</h5>
                        <h4>Acne Cleanser</h4>
                        <p>Deep cleanses and clears pores for smooth, healthy skin.</p>
                        <button>Learn More</button>
                    </div>

                    <!-- card 10   -->
                    <div class="product-card">
                        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Product 1">
                        <h5>Anti-Acne</h5>
                        <h4>Acne Cleanser</h4>
                        <p>Deep cleanses and clears pores for smooth, healthy skin.</p>
                        <button>Learn More</button>
                    </div>

                    <!-- card 11   -->
                    <div class="product-card">
                        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Product 1">
                        <h5>Anti-Acne</h5>
                        <h4>Acne Cleanser</h4>
                        <p>Deep cleanses and clears pores for smooth, healthy skin.</p>
                        <button>Learn More</button>
                    </div>

                    <!-- card 12   -->
                    <div class="product-card">
                        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Product 1">
                        <h5>Anti-Acne</h5>
                        <h4>Acne Cleanser</h4>
                        <p>Deep cleanses and clears pores for smooth, healthy skin.</p>
                        <button>Learn More</button>
                    </div>

                    <!-- card 13   -->
                    <div class="product-card">
                        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Product 1">
                        <h5>Anti-Acne</h5>
                        <h4>Acne Cleanser</h4>
                        <p>Deep cleanses and clears pores for smooth, healthy skin.</p>
                        <button>Learn More</button>
                    </div>

                    <!-- card 14   -->
                    <div class="product-card">
                        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Product 1">
                        <h5>Anti-Acne</h5>
                        <h4>Acne Cleanser</h4>
                        <p>Deep cleanses and clears pores for smooth, healthy skin.</p>
                        <button>Learn More</button>
                    </div>

                    <!-- card 15   -->
                    <div class="product-card">
                        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Product 1">
                        <h5>Anti-Acne</h5>
                        <h4>Acne Cleanser</h4>
                        <p>Deep cleanses and clears pores for smooth, healthy skin.</p>
                        <button>Learn More</button>
                    </div>


                </div>

                <!-- Pagination -->
                <div class="pagination-wrapper text-center mt-4">
                    <button class="page-btn active" data-page="1">1</button>
                    <button class="page-btn" data-page="2">2</button>
                    <button class="page-btn" data-page="3">3</button>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include_once('../partials/footer.php'); ?>





<!-- JS (required for Offcanvas) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>