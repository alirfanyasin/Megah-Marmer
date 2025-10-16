@extends('layouts.page')
@section('title', 'Our Commitments')
@section('content')

<!-- Hero Section -->
<section class="relative h-screen bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=1600');">
  <div class="absolute inset-0 bg-black/40"></div>
  <div class="relative z-10 container mx-auto px-4 h-full flex items-center">
    <div class="max-w-2xl text-white">
      <h1 class="text-5xl md:text-6xl lg:text-7xl font-light mb-6 leading-tight">Proof is better than empty words.</h1>
      <p class="text-base md:text-lg font-light leading-relaxed max-w-xl">
        We learn as go forward while we advance costs. That's why, since day one, we have decided to be a "buy-well-Off school" family. We're not perfect, but we value what guides how we operate so that, in the future, we can continue to flourish.
      </p>
    </div>
  </div>
</section>

<!-- Furniture Lasts Section -->
<section class="py-16 md:py-24 bg-white">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12 md:mb-16">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-light mb-4">Our furniture lasts 100 years</h2>
      <p class="text-gray-700 text-sm md:text-base max-w-3xl mx-auto leading-relaxed">
        Solid wood combined with timeless design, so you can buy less often.
      </p>
    </div>

    <p class="text-center text-gray-600 text-sm md:text-base max-w-4xl mx-auto mb-12 leading-relaxed">
      At Tikamoon, what sold in its essential character, we reject recyclable furniture and wood so all together point at old pieces. The goal is to help you buy less than there'll be pieces of furniture, and that today, fewer generations.
    </p>

    <div class="text-center mb-16">
      <a href="#" class="inline-block text-sm font-medium border-b-2 border-black pb-1 hover:border-gray-600 transition">
        See why it lasts for 100 years
      </a>
    </div>

    <!-- Three Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
      <!-- Card 1: Place -->
      <div class="relative h-80 md:h-96 rounded-lg overflow-hidden group">
        <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=600" alt="Place" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
          <h3 class="text-xl md:text-2xl font-light mb-3">Place</h3>
          <p class="text-sm mb-4 leading-relaxed">Preserving the habitat</p>
          <button class="bg-white/20 backdrop-blur-sm text-white px-6 py-2 rounded text-sm hover:bg-white/30 transition">
            Discover
          </button>
        </div>
      </div>

      <!-- Card 2: Product -->
      <div class="relative h-80 md:h-96 rounded-lg overflow-hidden group">
        <img src="https://images.unsplash.com/photo-1617806118233-18e1de247200?w=600" alt="Product" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
          <h3 class="text-xl md:text-2xl font-light mb-3">Product</h3>
          <p class="text-sm mb-4 leading-relaxed">Circulating for 100 years</p>
          <button class="bg-white/20 backdrop-blur-sm text-white px-6 py-2 rounded text-sm hover:bg-white/30 transition">
            Discover
          </button>
        </div>
      </div>

      <!-- Card 3: People -->
      <div class="relative h-80 md:h-96 rounded-lg overflow-hidden group">
        <img src="https://images.unsplash.com/photo-1556912167-f556f1f39faa?w=600" alt="People" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
          <h3 class="text-xl md:text-2xl font-light mb-3">People</h3>
          <p class="text-sm mb-4 leading-relaxed">Growing together</p>
          <button class="bg-white/20 backdrop-blur-sm text-white px-6 py-2 rounded text-sm hover:bg-white/30 transition">
            Discover
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Our Concrete Commitments -->
<section class="py-16 md:py-24 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12 md:mb-16">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-light mb-4">Our concrete commitments</h2>
      <p class="text-gray-600 text-sm md:text-base max-w-3xl mx-auto">
        "If I had a better flour recipe specially, I like we find several buy concrete commitments we hope madly with's Tikamoon."
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
      <!-- FSC Certification Card -->
      <div class="bg-white rounded-lg p-8 md:p-10 shadow-sm">
        <div class="flex items-start mb-6">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/FSC_logo.svg/200px-FSC_logo.svg.png" alt="FSC" class="w-12 h-12 mr-4">
          <div>
            <h3 class="text-xl md:text-2xl font-medium mb-2">FSC® certification</h3>
            <p class="text-gray-600 text-sm">
              For things purchased for us this FSC logo is our north star. Over 2,900 FSC® certified products demonstrate we have a commitment to responsible forestry.
            </p>
          </div>
        </div>
        <button class="bg-black text-white px-8 py-3 rounded text-sm hover:bg-gray-800 transition">
          Discover
        </button>
      </div>

      <!-- Choosing Solid Wood Card -->
      <div class="relative h-80 lg:h-auto rounded-lg overflow-hidden">
        <img src="https://images.unsplash.com/photo-1615876234886-fd9a39fda97f?w=800" alt="Solid wood" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
          <h3 class="text-2xl md:text-3xl font-light mb-3">Choosing solid wood</h3>
          <p class="text-sm mb-4 leading-relaxed">
            We could have put lots at the things of the European currency quite timber, but as soon as we will call us, we pick solid wood which is more durable and sustainable.
          </p>
          <button class="bg-white/20 backdrop-blur-sm text-white px-6 py-2 rounded text-sm hover:bg-white/30 transition">
            Discover
          </button>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      <!-- Life Cycle Analysis Card -->
      <div class="relative h-80 lg:h-auto rounded-lg overflow-hidden">
        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800" alt="Life cycle" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
          <h3 class="text-2xl md:text-3xl font-light mb-3">Life cycle analysis of our products</h3>
          <p class="text-sm mb-4 leading-relaxed">
            Life cycle analysis enables us to measure the environmental impact of our products, helping us improve manufacturing, transport, and use and end-of-life outcome.
          </p>
          <button class="bg-white/20 backdrop-blur-sm text-white px-6 py-2 rounded text-sm hover:bg-white/30 transition">
            Discover
          </button>
        </div>
      </div>

      <!-- Carbon Audit Card -->
      <div class="bg-white rounded-lg p-8 md:p-10 shadow-sm flex flex-col justify-between">
        <div>
          <h3 class="text-xl md:text-2xl font-medium mb-4">Our carbon audit</h3>
          <p class="text-gray-600 text-sm leading-relaxed mb-6">
            Giving a carbon & measuring our carbon services at our various footprint across. Produced and deployed a great way that will help us target our reduction efforts as well. The beautiful thing about the company is in a great, fine and solid firm.
          </p>
        </div>
        <button class="bg-black text-white px-8 py-3 rounded text-sm hover:bg-gray-800 transition self-start">
          Discover
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Eco-Rating Section -->
<section class="py-16 md:py-24 bg-white">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <!-- Left Side: Product Image -->
      <div class="relative">
        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=800" alt="Furniture" class="w-full h-auto rounded-lg">
        
        <!-- Eco-Rating Badge -->
        <div class="absolute top-4 right-4 bg-white rounded-full p-4 shadow-lg">
          <div class="text-center">
            <div class="w-16 h-16 rounded-full border-4 border-green-600 flex items-center justify-center mb-2">
              <span class="text-2xl font-bold text-green-600">B</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Side: Content -->
      <div>
        <h2 class="text-3xl md:text-4xl font-light mb-6">The Tikamoon eco-rating</h2>
        <p class="text-gray-700 leading-relaxed mb-6">
          The tool that helps you reconsider and choose your furniture
        </p>
        <p class="text-gray-600 text-sm leading-relaxed mb-8">
          We have develop a rating system for furniture We environmental test performances of our product, labeled on 7 or 7 manufacturers and recycling at easy, our approach + has a way that will give our products with off the shelf customer sense of action.
        </p>

        <!-- Value List -->
        <div class="space-y-3 mb-8">
          <div class="flex items-center">
            <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="text-sm text-gray-700">Solid wood</span>
          </div>
          <div class="flex items-center">
            <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="text-sm text-gray-700">No composite materials</span>
          </div>
          <div class="flex items-center">
            <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="text-sm text-gray-700">FSC® wood</span>
          </div>
          <div class="flex items-center">
            <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="text-sm text-gray-700">Traditional assembly</span>
          </div>
          <div class="flex items-center">
            <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="text-sm text-gray-700">High durability</span>
          </div>
          <div class="flex items-center">
            <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="text-sm text-gray-700">FSC® finish</span>
          </div>
          <div class="flex items-center">
            <svg class="w-5 h-5 text-green-600 mr-3" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
            </svg>
            <span class="text-sm text-gray-700">To be fir journal*</span>
          </div>
        </div>

        <button class="bg-black text-white px-8 py-3 rounded text-sm hover:bg-gray-800 transition">
          Discover
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Planet Heroes Section -->
<section class="py-16 md:py-24 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <!-- Right Side: Image -->
      <div class="order-1 lg:order-2">
        <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?w=800" alt="Forest" class="w-full h-auto rounded-lg shadow-lg">
        
        <!-- 1% Badge -->
        <div class="mt-8 bg-white rounded-lg p-6 shadow-lg inline-block">
          <div class="flex items-center space-x-4">
            <div class="w-16 h-16 bg-black rounded-full flex items-center justify-center">
              <span class="text-white text-xl font-bold">1%</span>
            </div>
            <div>
              <h4 class="font-medium text-lg">1% FOR THE PLANET®</h4>
              <p class="text-sm text-gray-600">Business members</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Left Side: Content -->
      <div class="order-2 lg:order-1">
        <h2 class="text-3xl md:text-4xl font-light mb-6">The circular ①</h2>
        <p class="text-gray-700 leading-relaxed mb-6">
          We are proud of the circular
        </p>
        <p class="text-gray-600 text-sm leading-relaxed mb-8">
          Each month by support it's our mission something, we have donated timely even planets for instance, like commitment shows timely and we can control the impact of our business, to help the planet restore it's biologic diversity and build family.
        </p>

        <button class="bg-black text-white px-8 py-3 rounded text-sm hover:bg-gray-800 transition">
          Discover
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Ambition Section -->
<section class="relative py-20 md:py-32 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1542601098-3adb3b502c84?w=1600');">
  <div class="absolute inset-0 bg-gradient-to-b from-black/60 to-black/40"></div>
  <div class="relative z-10 container mx-auto px-4">
    <div class="max-w-3xl">
      <h2 class="text-3xl md:text-4xl lg:text-5xl font-light text-white mb-6">Our ambition: A company with a regenerative aim</h2>
      <p class="text-white text-base md:text-lg leading-relaxed mb-8">
        Instead, taking the pressure of world we are in with positive impacts. It involves for taking care of the planet biodiversity, look after farmers, have an improving other collaboration than nudges build our marketplace. All about other thing.
      </p>
      <button class="bg-white text-black px-8 py-3 rounded text-sm hover:bg-gray-100 transition">
        Discover
      </button>
    </div>
  </div>
</section>

@endsection