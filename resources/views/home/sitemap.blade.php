<x-app-layout>
    @section('title',"$metaDetails->meta_title")
    @section('metadesc',"$metaDetails->meta_description")
    @section('metakeyword',"$metaDetails->meta_keywords")

    {{ Breadcrumbs::render('contact') }}
    <main id="main" class="contact-us-page">
        <!-- ======= Contact Section ======= -->
        <section class="contact row white-bg" id="contact">
            <div class="col-md-12">
                <div class="col-md-6">
                    <h2 class="primary-text header-font-size">Service Provided</h2>
                    <ul class="text-gray font-family-sans-serif">
                        <li><a href="https://microfluidprocess.com/product/1">Our Products</a></li>
                        <li><a href="https://microfluidprocess.com/product/1/1">High Pressure Homogenizers</a></li>
                        <li><a href="https://microfluidprocess.com/product/2">Pumps</a></li>
                        <li><a href="https://microfluidprocess.com/product/3">Plate Heat Extension</a></li>
                        <li><a href="https://microfluidprocess.com/product/9/10">Ageing Vat Tank</a></li>
                        <li><a href="https://microfluidprocess.com/product/8">Fittings & Accessories</a></li>
                        <li><a href="https://microfluidprocess.com/product/1/8">Homogenizer Spare Parts</a></li>
                        <li><a href="https://microfluidprocess.com/product/8/9">SMS Union</a></li>
                        <li><a href="https://microfluidprocess.com/industry/dairy_industry">Dairy Industry</a></li>
                        <li><a href="https://microfluidprocess.com/industry/food_and_beverage_industry">Food and Beverage Industry</a></li>
                        <li><a href="https://microfluidprocess.com/industry/chemical_industry">Chemical Industry</a></li>
                        <li><a href="https://microfluidprocess.com/industry/pharma_and_biotech_industry">Pharma and Biotech Industry</a></li>
                        <li><a href="https://microfluidprocess.com/industry/home_and_personal_care_industry">Home and Personal Care Industry</a></li>
                        <li><a href="https://microfluidprocess.com/product/8/6">Hygenic Filters</a></li>
                        <li><a href="https://microfluidprocess.com/product/2/2">Centrifugal Pumps</a></li>
                        <li><a href="https://microfluidprocess.com/product/3/3">Plate Heat Exchenger</a></li>
                        <li><a href="https://microfluidprocess.com/product/3/14">Plate Heat Exchanger Spare Parts</a></li>
                        <li><a href="https://microfluidprocess.com/product/9">Mix Section</a></li>
                        <li><a href="https://microfluidprocess.com/product/9/11">Batch Pasteurizer</a></li>
                        <li><a href="https://microfluidprocess.com/product/10">Systems</a></li>
                        <li><a href="https://microfluidprocess.com/product/10/12">Food & Beverage Tank Cleaning System</a></li>
                        <li><a href="https://microfluidprocess.com/products/mf220-homogenizer">MF220 Homogenizer</a></li>
                        <li><a href="https://microfluidprocess.com/products/high-pressure-homogenizer">MF320 Homogenizer</a></li>
                        <li><a href="https://microfluidprocess.com/products/homogenizer-spare-parts">Homogenizer Spare Parts</a></li>
                        <li><a href="https://microfluidprocess.com/products/hygienic-pumps">CP-10 Centrifugal Pump</a></li>
                        <li><a href="https://microfluidprocess.com/products/cp20-centrifugal-pump">CP-20 Centrifugal Pump</a></li>
                        <li><a href="https://microfluidprocess.com/products/plate-heat-exchenger">Plate Heat Exchanger</a></li>
                        <li><a href="https://microfluidprocess.com/products/spare-parts-of-plate-heat-exchangers">Plate Heat Exchanger Spare Parts</a></li>
                        <li><a href="https://microfluidprocess.com/products/ageing-and-storage-tanks">Ageing Vat Tank</a></li>
                        <li><a href="https://microfluidprocess.com/products/sms-union">SMS Union</a></li>
                        <li><a href="https://microfluidprocess.com/products/hygienic-filters">Hygienic Filters</a></li>
                        <li><a href="https://microfluidprocess.com/products/batch-pasteurizer-tank">Batch Pasteurizer Tank</a></li>
                        <li><a href="https://microfluidprocess.com/products/food-beverage-tank-cleaning-system">Food & Beverage Tank Cleaning System</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2 class="primary-text header-font-size">Important Links</h2>
                    <ul class="text-gray font-family-sans-serif">
                        <li><a href="https://microfluidprocess.com/">Home</a></li>
                        <li><a href="https://microfluidprocess.com/about-us">About Us</a></li>
                        <li><a href="https://microfluidprocess.com/product/1">Products</a></li>
                        <li><a href="https://microfluidprocess.com/industries">Industries</a></li>
                        <li><a href="https://microfluidprocess.com/contact-us">Contact</a></li>
                        <li><a href="https://microfluidprocess.com/download">Download</a></li>
                    </ul>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
</x-app-layout>