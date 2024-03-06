<?php $__env->startSection('title', 'Productos'); ?>



<?php $__env->startSection('content'); ?>
<div class="h-full bg-gray-200 p-8">
    <div class="flex flex-col xl:flex-row space-y-12 xl:space-y-0 xl:space-x-4">
        <div class="w-full xl:w-1/5 h-full bg-white px-2 2xl:px-4 py-6 space-y-8">
            <div x-data="{ minPrice: '', maxPrice: '' }" class="space-y-2">
                <span class="font-bold">Price</span>

                <div class="pl-2 space-y-1">
                    <div class="flex items-center space-x-2">
                        <label for="minPrice">Min:</label>
                        <input x-model="minPrice" type="range" id="minPrice" class="xl:w-full" min="0" max="1000" step="10">
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <label for="maxPrice">Max:</label>
                        <input x-model="maxPrice" type="range" id="maxPrice" class="xl:w-full" min="0" max="1000" step="10">
                    </div>

                    <div x-show="minPrice &amp;&amp; !maxPrice" style="display: none;">
                        <span>Min Price:</span>
                        <span class="text-primary font-bold">$<span x-text="minPrice"></span></span>
                    </div>

                    <div x-show="!minPrice &amp;&amp; maxPrice" style="display: none;">
                        <span>Max Price:</span>
                        <span class="text-primary font-bold">$<span x-text="maxPrice"></span></span>
                    </div>

                    <div x-show="minPrice &amp;&amp; maxPrice" style="display: none;">
                        <span>Price between</span>
                        <span class="text-primary font-bold">$<span x-text="minPrice"></span></span>
                        <span>and</span> 
                        <span class="text-primary font-bold">$<span x-text="maxPrice"></span></span>
                        
                    </div>
                </div>
            </div>

            <div class="space-y-2">
                <span class="font-bold">Categories</span>

                <div class="space-y-1 pl-2">
                    <div class="flex items-center">
                        <input type="checkbox" name="dresses" id="dresses" class="mr-2 text-primary border border-primary focus:ring-0">
                        <label for="dresses">Dresses</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="coats_jackets" id="coats_jackets" class="mr-2 text-primary border border-primary focus:ring-0">
                        <label for="coats_jackets">Coats and Jackets</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="blazers" id="blazers" class="mr-2 text-primary border border-primary focus:ring-0">
                        <label for="blazers">Blazers</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="sweaters_cardigans" id="sweaters_cardigans" class="mr-2 text-primary border border-primary focus:ring-0">
                        <label for="sweaters_cardigans">Sweaters and Cardigans</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="shirts_tops" id="shirts_tops" class="mr-2 text-primary border border-primary focus:ring-0">
                        <label for="shirts_tops">Shirts and Tops</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="tshirts_sweatshirts" id="tshirts_sweatshirts" class="mr-2 text-primary border border-primary focus:ring-0">
                        <label for="tshirts_sweatshirts">T-Shirts and Sweatshirts</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="trousers_shorts" id="trousers_shorts" class="mr-2 text-primary border border-primary focus:ring-0">
                        <label for="trousers_shorts">Trousers and Shorts</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="denim" id="denim" class="mr-2 text-primary border border-primary focus:ring-0">
                        <label for="denim">Denim</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="loungewear" id="loungewear" class="mr-2 text-primary border border-primary focus:ring-0">
                        <label for="loungewear">Loungewear</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="beachwear" id="beachwear" class="mr-2 text-primary border border-primary focus:ring-0">
                        <label for="beachwear">Beachwear</label>
                    </div>

                    <div class="flex items-center">
                        <input type="checkbox" name="underwear" id="underwear" class="mr-2 text-primary border border-primary focus:ring-0">
                        <label for="underwear">Underwear</label>
                    </div>
                </div>
            </div>

            <div class="space-y-2">
                <span class="font-bold">Color</span>
                
                <div class="flex flex-wrap items-center pl-1">
                
                    <input type="radio" name="red" class="w-5 h-5 bg-red-600 text-red-600 border border-red-600 m-1 focus:ring-0" title="Red">

                    <input type="radio" name="red" class="w-5 h-5 bg-orange-600 text-orange-600 border border-orange-600 m-1 focus:ring-0" title="Orange">

                    <input type="radio" name="red" class="w-5 h-5 bg-yellow-600 text-yellow-600 border border-yellow-600 m-1 focus:ring-0" title="Yellow">

                    <input type="radio" name="red" class="w-5 h-5 bg-green-600 text-green-600 border border-green-600 m-1 focus:ring-0" title="Green">

                    <input type="radio" name="red" class="w-5 h-5 bg-blue-600 text-blue-600 border border-blue-600 m-1 focus:ring-0" title="Blue">

                    <input type="radio" name="red" class="w-5 h-5 bg-indigo-600 text-indigo-600 border border-indigo-600 m-1 focus:ring-0" title="Indigo">

                    <input type="radio" name="red" class="w-5 h-5 bg-purple-600 text-purple-600 border border-purple-600 m-1 focus:ring-0" title="Purple">

                    <input type="radio" name="red" class="w-5 h-5 bg-pink-600 text-pink-600 border border-pink-600 m-1 focus:ring-0" title="Pink">

                </div>
            </div>
        </div>
        <div class="w-full xl:w-4/5 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-4">
            <div class="flex flex-col items-center justify-center space-y-3">
                <div x-data="{ showBtn: false }" class="relative overflow-hidden" @mouseenter="showBtn = true" @mouseleave="showBtn = false">
                    <img class="w-[250px] h-[320px] transition duration-500" :class="showBtn ? 'scale-125' : ''" src="<?php echo e(asset('storage/assets/img/ecommerce/product1.jpg')); ?>" alt="Product Name">
                    <span class="absolute top-2 left-2 bg-green-600 text-gray-100 text-xs font-bold px-2 py-0.5 uppercase">
                        New
                    </span>
                    <div x-show="showBtn" x-transition.enter.duration.500ms="" x-transition.leave.duration.300ms="" class="absolute w-full h-full top-0 left-0 z-10 bg-black bg-opacity-40 flex items-end justify-center" style="display: none;">
                        <div class="mb-8 space-x-3">
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center space-y-1">
                    <a href="./productDetails.html" class="text-gray-900 hover:text-primary">Product Name</a>
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <span class="text-xl text-primary font-bold">$ 40</span>
                </div>
            </div>
            
            <div class="flex flex-col items-center justify-center space-y-3">
                <div x-data="{ showBtn: false }" class="relative overflow-hidden" @mouseenter="showBtn = true" @mouseleave="showBtn = false">
                    <img class="w-[250px] h-[320px] transition duration-500" :class="showBtn ? 'scale-125' : ''" src="<?php echo e(asset('storage/assets/img/ecommerce/product2.jpg')); ?>" alt="Product Name">
                    <div x-show="showBtn" x-transition.enter.duration.500ms="" x-transition.leave.duration.300ms="" class="absolute w-full h-full top-0 left-0 z-10 bg-black bg-opacity-40 flex items-end justify-center" style="display: none;">
                        <div class="mb-8 space-x-3">
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center space-y-1">
                    <a href="./productDetails.html" class="text-gray-900 hover:text-primary">Product Name</a>
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <span class="text-xl text-primary font-bold">$ 63</span>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center space-y-3">
                <div x-data="{ showBtn: false }" class="relative overflow-hidden" @mouseenter="showBtn = true" @mouseleave="showBtn = false">
                    <img class="w-[250px] h-[320px] transition duration-500" :class="showBtn ? 'scale-125' : ''" src="<?php echo e(asset('storage/assets/img/ecommerce/product3.jpg')); ?>" alt="Product Name">
                    <span class="absolute top-2 left-2 bg-gray-900 text-gray-100 text-xs font-bold px-2 py-0.5 uppercase">
                        Out Of Stock
                    </span>
                    <div x-show="showBtn" x-transition.enter.duration.500ms="" x-transition.leave.duration.300ms="" class="absolute w-full h-full top-0 left-0 z-10 bg-black bg-opacity-40 flex items-end justify-center" style="display: none;">
                        <div class="mb-8 space-x-3">
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center space-y-1">
                    <a href="./productDetails.html" class="text-gray-900 hover:text-primary">Product Name</a>
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <span class="text-xl text-primary font-bold">$ 123</span>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center space-y-3">
                <div x-data="{ showBtn: false }" class="relative overflow-hidden" @mouseenter="showBtn = true" @mouseleave="showBtn = false">
                    <img class="w-[250px] h-[320px] transition duration-500" :class="showBtn ? 'scale-125' : ''" src="<?php echo e(asset('storage/assets/img/ecommerce/product4.jpg')); ?>" alt="Product Name">
                    <div x-show="showBtn" x-transition.enter.duration.500ms="" x-transition.leave.duration.300ms="" class="absolute w-full h-full top-0 left-0 z-10 bg-black bg-opacity-40 flex items-end justify-center" style="display: none;">
                        <div class="mb-8 space-x-3">
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center space-y-1">
                    <a href="./productDetails.html" class="text-gray-900 hover:text-primary">Product Name</a>
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <span class="text-xl text-primary font-bold">$ 230</span>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center space-y-3">
                <div x-data="{ showBtn: false }" class="relative overflow-hidden" @mouseenter="showBtn = true" @mouseleave="showBtn = false">
                    <img class="w-[250px] h-[320px] transition duration-500" :class="showBtn ? 'scale-125' : ''" src="<?php echo e(asset('storage/assets/img/ecommerce/product5.jpg')); ?>" alt="Product Name">
                    <div x-show="showBtn" x-transition.enter.duration.500ms="" x-transition.leave.duration.300ms="" class="absolute w-full h-full top-0 left-0 z-10 bg-black bg-opacity-40 flex items-end justify-center" style="display: none;">
                        <div class="mb-8 space-x-3">
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center space-y-1">
                    <a href="./productDetails.html" class="text-gray-900 hover:text-primary">Product Name</a>
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <span class="text-xl text-primary font-bold">$ 25</span>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center space-y-3">
                <div x-data="{ showBtn: false }" class="relative overflow-hidden" @mouseenter="showBtn = true" @mouseleave="showBtn = false">
                    <img class="w-[250px] h-[320px] transition duration-500" :class="showBtn ? 'scale-125' : ''" src="<?php echo e(asset('storage/assets/img/ecommerce/product6.jpg')); ?>" alt="Product Name">
                    <div x-show="showBtn" x-transition.enter.duration.500ms="" x-transition.leave.duration.300ms="" class="absolute w-full h-full top-0 left-0 z-10 bg-black bg-opacity-40 flex items-end justify-center" style="display: none;">
                        <div class="mb-8 space-x-3">
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center space-y-1">
                    <a href="./productDetails.html" class="text-gray-900 hover:text-primary">Product Name</a>
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <span class="text-xl text-primary font-bold">$ 99</span>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center space-y-3">
                <div x-data="{ showBtn: false }" class="relative overflow-hidden" @mouseenter="showBtn = true" @mouseleave="showBtn = false">
                    <img class="w-[250px] h-[320px] transition duration-500" :class="showBtn ? 'scale-125' : ''" src="<?php echo e(asset('storage/assets/img/ecommerce/product7.jpg')); ?>" alt="Product Name">
                    <div x-show="showBtn" x-transition.enter.duration.500ms="" x-transition.leave.duration.300ms="" class="absolute w-full h-full top-0 left-0 z-10 bg-black bg-opacity-40 flex items-end justify-center" style="display: none;">
                        <div class="mb-8 space-x-3">
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center space-y-1">
                    <a href="./productDetails.html" class="text-gray-900 hover:text-primary">Product Name</a>
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <span class="text-xl text-primary font-bold">$ 49</span>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center space-y-3">
                <div x-data="{ showBtn: false }" class="relative overflow-hidden" @mouseenter="showBtn = true" @mouseleave="showBtn = false">
                    <img class="w-[250px] h-[320px] transition duration-500" :class="showBtn ? 'scale-125' : ''" src="<?php echo e(asset('storage/assets/img/ecommerce/product8.jpg')); ?>" alt="Product Name">
                    <div x-show="showBtn" x-transition.enter.duration.500ms="" x-transition.leave.duration.300ms="" class="absolute w-full h-full top-0 left-0 z-10 bg-black bg-opacity-40 flex items-end justify-center" style="display: none;">
                        <div class="mb-8 space-x-3">
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center space-y-1">
                    <a href="./productDetails.html" class="text-gray-900 hover:text-primary">Product Name</a>
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <span class="text-xl text-primary font-bold">$ 119</span>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center space-y-3">
                <div x-data="{ showBtn: false }" class="relative overflow-hidden" @mouseenter="showBtn = true" @mouseleave="showBtn = false">
                    <img class="w-[250px] h-[320px] transition duration-500" :class="showBtn ? 'scale-125' : ''" src="<?php echo e(asset('storage/assets/img/ecommerce/product9.jpg')); ?>" alt="Product Name">
                    <div x-show="showBtn" x-transition.enter.duration.500ms="" x-transition.leave.duration.300ms="" class="absolute w-full h-full top-0 left-0 z-10 bg-black bg-opacity-40 flex items-end justify-center" style="display: none;">
                        <div class="mb-8 space-x-3">
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center space-y-1">
                    <a href="./productDetails.html" class="text-gray-900 hover:text-primary">Product Name</a>
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <span class="text-xl text-primary font-bold">$ 35</span>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center space-y-3">
                <div x-data="{ showBtn: false }" class="relative overflow-hidden" @mouseenter="showBtn = true" @mouseleave="showBtn = false">
                    <img class="w-[250px] h-[320px] transition duration-500" :class="showBtn ? 'scale-125' : ''" src="<?php echo e(asset('storage/assets/img/ecommerce/product10.jpg')); ?>" alt="Product Name">
                    <div x-show="showBtn" x-transition.enter.duration.500ms="" x-transition.leave.duration.300ms="" class="absolute w-full h-full top-0 left-0 z-10 bg-black bg-opacity-40 flex items-end justify-center" style="display: none;">
                        <div class="mb-8 space-x-3">
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center space-y-1">
                    <a href="./productDetails.html" class="text-gray-900 hover:text-primary">Product Name</a>
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <span class="text-xl text-primary font-bold">$ 59</span>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center space-y-3">
                <div x-data="{ showBtn: false }" class="relative overflow-hidden" @mouseenter="showBtn = true" @mouseleave="showBtn = false">
                    <img class="w-[250px] h-[320px] transition duration-500" :class="showBtn ? 'scale-125' : ''" src="<?php echo e(asset('storage/assets/img/ecommerce/product11.jpg')); ?>" alt="Product Name">
                    <div x-show="showBtn" x-transition.enter.duration.500ms="" x-transition.leave.duration.300ms="" class="absolute w-full h-full top-0 left-0 z-10 bg-black bg-opacity-40 flex items-end justify-center" style="display: none;">
                        <div class="mb-8 space-x-3">
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center space-y-1">
                    <a href="./productDetails.html" class="text-gray-900 hover:text-primary">Product Name</a>
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <span class="text-xl text-primary font-bold">$ 115</span>
                </div>
            </div>

            <div class="flex flex-col items-center justify-center space-y-3">
                <div x-data="{ showBtn: false }" class="relative overflow-hidden" @mouseenter="showBtn = true" @mouseleave="showBtn = false">
                    <img class="w-[250px] h-[320px] transition duration-500" :class="showBtn ? 'scale-125' : ''" src="<?php echo e(asset('storage/assets/img/ecommerce/product12.jpg')); ?>" alt="Product Name">
                    <div x-show="showBtn" x-transition.enter.duration.500ms="" x-transition.leave.duration.300ms="" class="absolute w-full h-full top-0 left-0 z-10 bg-black bg-opacity-40 flex items-end justify-center" style="display: none;">
                        <div class="mb-8 space-x-3">
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Wishlist">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </button>
                            <button class="bg-gray-100 hover:bg-primary text-primary hover:text-gray-100 p-2.5 rounded-full transition duration-200" title="Add To Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center space-y-1">
                    <a href="./productDetails.html" class="text-gray-900 hover:text-primary">Product Name</a>
                    <div class="flex items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-yellow-500" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <span class="text-xl text-primary font-bold">$ 60</span>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center xl:justify-end my-8 mx-6">
        <button class="text-gray-400 hover:bg-gray-200 p-2 border border-gray-300" disabled="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button class="text-gray-100 text-lg bg-primary hover:bg-primary-dark px-3 py-0.5 border border-primary">
            <span>1</span>
        </button>
        <button class="text-gray-600 text-lg hover:bg-gray-300 px-3 py-0.5 border border-gray-300">
            <span>2</span>
        </button>
        <button class="text-gray-600 text-lg hover:bg-gray-300 px-3 py-0.5 border border-gray-300">
            <span>3</span>
        </button>
        <button class="text-gray-600 text-lg hover:bg-gray-300 px-3 py-0.5 border border-gray-300">
            <span>4</span>
        </button>
        <button class="text-gray-600 text-lg hover:bg-gray-300 px-3 py-0.5 border border-gray-300">
            <span>5</span>
        </button>
        <button class="text-gray-900 hover:bg-gray-300 p-2 border border-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SistemaFac\resources\views/dashboard/products.blade.php ENDPATH**/ ?>