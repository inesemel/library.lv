<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Library</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    
<svg
class="text-gray-800 dark:text-gray-300 fill-current"
width="48.76804mm"
height="43.109962mm"
viewBox="0 0 24.38402 21.554981"
version="1.1"
id="svg5"
sodipodi:docname="logo.svg"
inkscape:version="1.1.2 (b8e25be833, 2022-02-05)"
xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
xmlns="http://www.w3.org/2000/svg"
xmlns:svg="http://www.w3.org/2000/svg">
<sodipodi:namedview
  id="namedview14"
  pagecolor="#ffffff"
  bordercolor="#666666"
  borderopacity="1.0"
  inkscape:pageshadow="2"
  inkscape:pageopacity="0.0"
  inkscape:pagecheckerboard="0"
  inkscape:document-units="mm"
  showgrid="false"
  inkscape:zoom="5.1001842"
  inkscape:cx="14.705351"
  inkscape:cy="3.3332129"
  inkscape:window-width="1920"
  inkscape:window-height="1017"
  inkscape:window-x="-1928"
  inkscape:window-y="-8"
  inkscape:window-maximized="1"
  inkscape:current-layer="svg5" />
<defs
  id="defs2" />
<g
  id="layer1"
  style="display:none"
  transform="translate(-116.72624,-109.77157)">
 <rect
    style="fill:#f3f4f6;fill-opacity:1;stroke:none;stroke-width:0.2159"
    id="rect846"
    width="300"
    height="412"
    x="-45"
    y="-57.5" />
</g>
<g
  id="layer5"
  style="display:inline"
  transform="matrix(0.70637787,0,0,0.70637787,-78.872989,-74.375695)">
 <path
    style="fill:currentColor; stroke-width:0.0846667,"
    d="m 127.76032,131.24624 c -0.10133,-0.0408 -0.27042,-0.19083 -0.37576,-0.3333 l -0.19152,-0.25905 h -5.13181 c -3.87852,0 -5.15662,-0.0248 -5.23341,-0.1016 -0.13634,-0.13634 -0.12882,-0.44774 0.0137,-0.566 0.0836,-0.0694 1.59924,-0.0897 5.52384,-0.0739 l 5.40857,0.0218 0.14949,0.3175 0.1495,0.3175 h 0.91373 c 0.94033,0 1.11693,-0.0557 1.11693,-0.35262 0,-0.2447 0.28162,-0.32471 1.143,-0.32471 0.89787,0 1.143,0.0787 1.143,0.36705 0,0.32572 -0.15779,0.39495 -0.90023,0.39495 -0.58913,0 -0.70444,0.0229 -0.74494,0.14817 -0.0264,0.0815 -0.17415,0.23389 -0.32844,0.33866 -0.25644,0.17414 -0.37462,0.19004 -1.37596,0.18514 -0.60249,-0.003 -1.17833,-0.0388 -1.27966,-0.0796 z m 8.38285,-1.20205 c -0.68667,-0.67994 -1.15803,-1.08615 -1.20351,-1.03716 -0.0411,0.0443 -0.30933,0.41335 -0.59604,0.82014 -0.28671,0.40678 -0.59918,0.78129 -0.69439,0.83224 -0.24257,0.12982 -0.44954,-0.0779 -0.67077,-0.6732 -0.0972,-0.26143 -0.5773,-1.53103 -1.06699,-2.82133 -0.48969,-1.29031 -0.87772,-2.40971 -0.8623,-2.48755 0.0154,-0.0778 0.10425,-0.19058 0.19738,-0.25051 0.18533,-0.11927 0.13538,-0.13596 3.96289,1.32382 1.96446,0.74923 2.17545,0.85402 2.17545,1.08044 0,0.18846 -0.18887,0.35966 -1.0795,0.97848 -0.38418,0.26693 -0.6985,0.50678 -0.6985,0.53299 0,0.0262 0.50482,0.55728 1.12183,1.18013 0.61701,0.62286 1.13383,1.16817 1.14849,1.21181 0.0592,0.17612 -0.16569,0.4274 -0.38245,0.4274 -0.17241,0 -0.47825,-0.25291 -1.35159,-1.1177 z m -1.95189,-1.38194 c 0.36888,-0.53883 0.61908,-0.80211 1.016,-1.06914 1.04118,-0.70046 1.16326,-0.53876 -1.04541,-1.38457 -1.0695,-0.40955 -1.96159,-0.7276 -1.98243,-0.70676 -0.0472,0.0472 1.41294,3.88338 1.47634,3.87872 0.0254,-0.002 0.26633,-0.32508 0.5355,-0.71825 z m 4.39587,1.89004 c -0.14669,-0.14669 -0.12496,-0.35901 0.0532,-0.52028 0.12665,-0.11461 0.34702,-0.14012 1.21073,-0.14012 1.10844,0 1.2591,0.0456 1.2591,0.381 0,0.0978 -0.0457,0.22352 -0.1016,0.2794 -0.14106,0.14106 -2.28041,0.14106 -2.42147,0 z m -10.37092,-0.7169 c -0.0837,-0.0231 -0.17381,-0.15265 -0.20109,-0.28905 l -0.0494,-0.24712 h -5.43158 c -4.77897,0 -5.45418,-0.0158 -5.61975,-0.1318 l -0.18817,-0.1318 v -8.10626 c 0,-6.19199 0.024,-8.13026 0.1016,-8.20787 0.15364,-0.15364 1.03889,-0.13065 1.1726,0.0305 0.17425,0.20997 0.004,0.58134 -0.28093,0.6144 l -0.23127,0.0268 v 7.52971 7.52971 h 3.78178 c 2.07997,0 3.7659,-0.0143 3.7465,-0.0318 -0.0194,-0.0175 -0.89253,-0.22997 -1.94028,-0.47217 -3.71633,-0.85907 -4.01987,-0.93859 -4.1275,-1.08135 -0.083,-0.11008 -0.10583,-1.93638 -0.10583,-8.46385 0,-8.27979 9.1e-4,-8.3244 0.17366,-8.49715 0.0983,-0.0983 0.23608,-0.15409 0.3175,-0.12855 0.0791,0.0248 1.88417,0.57681 4.01124,1.22667 2.12708,0.64986 3.99398,1.24633 4.14867,1.32548 0.44613,0.2283 0.87204,0.59462 1.21653,1.04635 l 0.31886,0.41812 0.25657,-0.38734 c 0.54054,-0.81608 1.15025,-1.12737 3.78097,-1.93041 0.34925,-0.10661 1.60655,-0.49887 2.794,-0.87168 2.95954,-0.92918 2.77199,-0.88565 2.96868,-0.68896 0.15998,0.15998 0.16398,0.36747 0.16398,8.4976 0,9.28025 0.0528,8.51057 -0.59612,8.68531 -0.36428,0.0981 -0.61473,0.0213 -0.70595,-0.21638 -0.0694,-0.18081 0.0763,-0.43763 0.28598,-0.50419 0.16784,-0.0533 0.16943,-0.12675 0.16943,-7.8374 0,-4.28099 -0.0286,-7.78333 -0.0635,-7.78298 -0.0349,3.4e-4 -0.2921,0.0719 -0.5715,0.15901 -0.2794,0.0871 -1.81938,0.56557 -3.42216,1.06327 -1.60279,0.4977 -3.05059,0.97487 -3.21733,1.06037 -0.42219,0.21647 -0.9139,0.72941 -1.17945,1.23037 l -0.2244,0.42334 -0.0231,7.00616 c -0.0138,4.19946 0.008,7.00617 0.0544,7.00617 0.0426,0 0.0987,-0.0552 0.12454,-0.12257 0.0652,-0.16998 0.43398,-0.34717 1.06021,-0.50944 0.61762,-0.16004 0.83701,-0.11691 0.91132,0.17915 0.0757,0.30147 -0.091,0.4309 -0.7754,0.60228 -0.57654,0.14436 -0.58915,0.15348 -0.72547,0.52451 -0.0971,0.26433 -0.1992,0.39359 -0.34032,0.43088 -0.24601,0.065 -1.32917,0.0819 -1.53858,0.024 z m 0.42724,-8.05033 -0.0216,-6.9215 -0.18872,-0.4089 c -0.26574,-0.57579 -0.65499,-1.03909 -1.08449,-1.29079 -0.31617,-0.18529 -2.18282,-0.7946 -5.28846,-1.72627 -0.44238,-0.13271 -1.12818,-0.33929 -1.524,-0.45906 -0.39582,-0.11977 -0.74824,-0.21856 -0.78317,-0.21954 -0.0349,-9.7e-4 -0.0635,3.50086 -0.0635,7.78185 0,7.33989 0.008,7.78612 0.14817,7.82732 0.0815,0.024 1.31022,0.31381 2.7305,0.64394 1.42028,0.33013 2.88713,0.67247 3.25967,0.76075 0.37253,0.0883 1.03191,0.24291 1.46528,0.34362 0.51606,0.11992 0.86665,0.2524 1.016,0.38391 0.12543,0.11045 0.25681,0.20202 0.29197,0.20349 0.0352,0.001 0.0542,-3.112 0.0423,-6.91882 z m 8.42159,7.38236 c -0.22851,-0.16005 -0.24163,-0.38624 -0.0333,-0.57474 0.13244,-0.11985 0.3835,-0.14012 1.73567,-0.14012 h 1.58083 v -7.52475 -7.52475 l -0.24719,-0.0494 c -0.28408,-0.0568 -0.39992,-0.30446 -0.26252,-0.5612 0.0765,-0.14296 0.17597,-0.17253 0.58042,-0.17253 0.26845,0 0.53381,0.0457 0.58969,0.1016 0.0776,0.0776 0.1016,2.01588 0.1016,8.20787 v 8.10626 l -0.18817,0.1318 c -0.1555,0.10892 -0.4904,0.1318 -1.9285,0.1318 -1.4381,0 -1.773,-0.0229 -1.92849,-0.1318 z"
    id="path2530" />
</g>
<g
  id="layer3"
  style="display:none"
  transform="translate(-116.72624,-109.77157)">
 <rect
    style="fill:#b6bfc8;fill-opacity:1;stroke:none;stroke-width:0.2159"
    id="rect1154"
    width="32.166065"
    height="121.51624"
    x="14.676115"
    y="-240.00969"
    transform="rotate(135)" />
 <rect
    style="fill:#b6bfc8;fill-opacity:1;stroke:none;stroke-width:0.2159"
    id="rect1154-3"
    width="32.166065"
    height="121.51624"
    x="-195.33461"
    y="-29.998983"
    transform="matrix(-0.70710677,-0.70710679,-0.70710679,0.70710677,0,0)" />
</g>
<g
  id="layer4"
  style="display:none"
  transform="translate(-116.72624,-109.77157)">
 <ellipse
    style="fill:#b6bfc8;fill-opacity:1;stroke:none;stroke-width:0.2159"
    id="path2131"
    cx="105"
    cy="105.03207"
    rx="49.027771"
    ry="58.125706" />
 <rect
    style="fill:#b6bfc8;fill-opacity:1;stroke:none;stroke-width:0.224977"
    id="rect2155"
    width="174.88257"
    height="128.42769"
    x="18.195877"
    y="178.9261"
    ry="34.798492" />
</g>
</svg>
                </div>

                <div class="mt-16 items-center">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="{{ url('/dashboard') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-center">WELCOME!</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">
                                    Welcome to our local library system, where our priority is to make your reading experience enjoyable and hassle-free. Our website is designed to help you easily find and keep track of your favorite books within your local library. With a vast collection of books on various genres, we are confident that you will find one that suits your taste. Whether you're an avid reader or just starting, we are here to guide you in navigating your way through our library system. So sit back, relax, and discover the world of literature through our library system.
                                </p>
                            </div>

                        </a>

                        <a href="{{ route('login') }}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-center">LOG IN</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">
                                    If you already have an account! Logging in will allow you to access your account information, view your issued book history, and browse more book releases or updates to your
                                    account. If you have forgotten your password, you can click on the "Forgot Password" link and follow the prompts to reset your password. Once you are logged in,
                                    you can easily navigate through the site and find the products or services you need.</p>
                            </div>

                        </a>
                        {{-- <a href="{{ route('login') }}" class=" scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-center">LOG IN</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-center">If you already have an account!</p>
                            </div>
                        </a> --}}

                        <a href="{{ route('register') }}" class=" scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class="text-center mt-6 text-xl font-semibold text-gray-900 dark:text-white text-center">REGISTER</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    If you do not have an account! 
                                    Creating an account is easy and free! Click on the "Register" button and fill out the required information, including your name, email address, and a secure password. Once you have submitted your information, you will receive a verification email. Click on the link provided in the email to activate your account, and you're ready to start using our services. With an account, you'll be able to access exclusive content, save your preferences and searches, and receive personalized recommendations. Don't wait - register today and start enjoying all the benefits of our platform!
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>