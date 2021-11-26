<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API TRANSPORTES</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <section>
            <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
                <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                  <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-sky-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
                  <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                    <div class="max-w-md mx-auto">
                      
                      <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                          <p>Bienvenido</p>
                          <ul class="list-disc space-y-2">
                            <li class="flex items-start">
                              <span class="h-6 flex items-center sm:h-7">
                                <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                              </span>
                              <p class="ml-2">
                                Listo para empezar a consumir las
                                <code class="text-sm font-bold text-gray-900">APIS</code> 
                              </p>
                            </li>
                            <li class="flex items-start">
                              <span class="h-6 flex items-center sm:h-7">
                                <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                              </span>
                              <p class="ml-2">
                                Contacte a un administrador para saber las 
                                <code class="text-sm font-bold text-gray-900">rutas</code>
                              </p>
                            </li>
                            <li class="flex items-start">
                              <span class="h-6 flex items-center sm:h-7">
                                <svg class="flex-shrink-0 h-5 w-5 text-cyan-500" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                              </span>
                              <p class="ml-2">Gracias por visitarnos</p>
                            </li>
                          </ul>
                          <p>Este proyecto se encuentra en una cuenta estudiantil por lo que se debe de reactivar las instancias cada vez que se finalice la sesión</p>
                        </div>
                        <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                          <p>Disculpe las molestias :(</p>
                          <p>
                            <a href="https://api.whatsapp.com/send?phone=+529981887007&text={{ urlencode('Hola') }}" class="text-cyan-600 hover:text-cyan-700"> Comunicarse con el representante del equipo&rarr; </a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- Hola --}}
        </section>
        
    </body>
</html>
