@extends("layouts.main")
@section('content')

 <div class="container mx-auto p-4 w-[430px] h-[645px]">
     <!-- component -->
<!-- This is an example component -->
<div class="max-w-2xl mx-auto">

    <nav class="border-gray-200 px-3 mb-10">
      <div class="container mx-auto flex flex-wrap items-center justify-between">
      <a href="/" class="w-11 flex">
       <img src="{{ asset('assets/image/rbt.png') }}" alt="">&nbsp;
          <span class="self-center text-lg font-semibold whitespace-nowrap">Aziz Ramadhan</span>
      </a>
      <div class="flex md:order-2">
          <div class="relative mr-3 md:mr-0 hidden md:block">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            </div>
      </div>
      </div>
    </nav>
    <!-- component -->
<!-- MDI Icons -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">

<!-- Page Container -->
                <!-- Team Members -->
            <div class="overflow-auto h-5/6 flex flex-wrap">
                    <!-- Member #1 -->
                    <div class="w-full md:w-6/12 mb-6 px-6 sm:px-6 lg:px-4">
                        <div class="flex flex-col">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="w-30 rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                    src="https://www.sukarobot.com/Instruktur/1704812494.png">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    Asep Saeban 
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    Robotik
                                </div>

                                <!-- Social Icons -->
                                <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                                    <!-- Instagram -->
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                  
                    <div class="w-full md:w-6/12 mb-6 px-6 sm:px-6 lg:px-4">
                        <div class="flex flex-col">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="w-30 rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                    src="{{ asset('assets/image/ilyass.jpg') }}">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    Ilyas Abdul Aziz
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    Robotik
                                </div>

                                <!-- Social Icons -->
                                <div class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                                    <!-- Instagram -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="w-full md:w-6/12 mb-6 px-6 sm:px-6 lg:px-4">
                        <div class="flex flex-col">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="w-30 rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                    src="https://www.sukarobot.com/Instruktur/1706276970.jpg">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    Adi palwo
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    Robotik
                                </div>

                               
                            </div>
                        </div>
                    </div>
                        
                    <div class="w-full md:w-6/12 mb-6 px-6 sm:px-6 lg:px-4">
                      <div class="flex flex-col">
                          <!-- Avatar -->
                          <a href="#" class="mx-auto">
                              <img class="w-30 rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                  src="https://www.sukarobot.com/Instruktur/1706277082.jpg">
                          </a>

                          <!-- Details -->
                          <div class="text-center mt-6">
                              <!-- Name -->
                              <h1 class="text-gray-900 text-xl font-bold mb-1">
                                  Siti olis
                              </h1>

                              <!-- Title -->
                              <div class="text-gray-700 font-light mb-2">
                                  Robotik
                              </div>

                           
                              </div>
                          </div>
                    </div>

                      <div class="w-full md:w-6/12 mb-6 px-6 sm:px-6 lg:px-4">
                        <div class="flex flex-col">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="w-30 rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                    src="https://www.sukarobot.com/Instruktur/1706277136.jpg">
                            </a>
  
                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    Wanda Ivanna Fitriya
                                </h1>
  
                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    Coding For Kidz
                                </div>
                                </div>
                            </div>
                      </div>
                      
                    <div class="w-full md:w-6/12 mb-6 px-6 sm:px-6 lg:px-4">
                      <div class="flex flex-col">
                          <!-- Avatar -->
                          <a href="#" class="mx-auto">
                              <img class="w-30 rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                  src="https://www.sukarobot.com/Instruktur/1706277171.jpg">
                          </a>

                          <!-- Details -->
                          <div class="text-center mt-6">
                              <!-- Name -->
                              <h1 class="text-gray-900 text-xl font-bold mb-1">
                                  Siti syarah jamilah
                              </h1>

                              <!-- Title -->
                              <div class="text-gray-700 font-light mb-2">
                                  Digital MArketing
                              </div>
                        </div>
                    
                        </div>
                    </div>

                    <div class="w-full md:w-6/12 mb-6 px-6 sm:px-6 lg:px-4">
                      <div class="flex flex-col">
                          <!-- Avatar -->
                          <a href="#" class="mx-auto">
                              <img class="w-30 rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                  src="https://www.sukarobot.com/Instruktur/1706277242.jpg">
                          </a>

                          <!-- Details -->
                          <div class="text-center mt-6">
                              <!-- Name -->
                              <h1 class="text-gray-900 text-xl font-bold mb-1">
                                  M Rayhan
                              </h1>

                              <!-- Title -->
                              <div class="text-gray-700 font-light mb-2">
                                  Robotik
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="w-full md:w-6/12 mb-6 px-6 sm:px-6 lg:px-4">
                      <div class="flex flex-col">
                          <!-- Avatar -->
                          <a href="#" class="mx-auto">
                              <img class="w-30 rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                  src="https://www.sukarobot.com/Instruktur/1706277260.jpg">
                          </a>

                          <!-- Details -->
                          <div class="text-center mt-6">
                              <!-- Name -->
                              <h1 class="text-gray-900 text-xl font-bold mb-1">
                                  Raga
                              </h1>

                              <!-- Title -->
                              <div class="text-gray-700 font-light mb-2">
                                  Robotik
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="w-full md:w-6/12 mb-6 px-6 sm:px-6 lg:px-4">
                      <div class="flex flex-col">
                          <!-- Avatar -->
                          <a href="#" class="mx-auto">
                              <img class="w-30 rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                  src="{{ asset('assets/image/hasan.png') }}">
                          </a>

                          <!-- Details -->
                          <div class="text-center mt-6">
                              <!-- Name -->
                              <h1 class="text-gray-900 text-xl font-bold mb-1">
                                  Hasan
                              </h1>

                              <!-- Title -->
                              <div class="text-gray-700 font-light mb-2">
                                  Digital Marketing
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="w-full md:w-6/12 mb-6 px-6 sm:px-6 lg:px-4">
                      <div class="flex flex-col">
                          <!-- Avatar -->
                          <a href="#" class="mx-auto">
                              <img class="w-30 rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                  src="{{ asset('assets/image/dian.jpg') }}">
                          </a>

                          <!-- Details -->
                          <div class="text-center mt-6">
                              <!-- Name -->
                              <h1 class="text-gray-900 text-xl font-bold mb-1">
                                  Dian Puspita
                              </h1>

                              <!-- Title -->
                              <div class="text-gray-700 font-light mb-2">
                                  Digital Marketing
                              </div>
                          </div>
                      </div>
                    </div>
                    <div class="w-full md:w-6/12 mb-6 px-6 sm:px-6 lg:px-4">
                        <div class="flex flex-col">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="w-30 rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                    src="https://www.sukarobot.com/Instruktur/1708137019.png">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-l font-bold mb-1">
                                    Aryo De Wibowo MS, S.T., M.T
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    Instruktur
                                </div>
                            </div>
                        </div>
                      </div>
                  
                    </div>

                    

