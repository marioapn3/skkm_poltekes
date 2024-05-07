<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="css/styles.css">
    <title>Select2 Tailwind CSS Demo</title>
</head>

<body>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.selectpicker').select2();
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

    <div class="flex justify-center h-screen p-4 px-3 py-10 bg-white dark:bg-black">
        <div class="w-full max-w-lg bg-white dark:bg-black">

            <div class="bg-white shadow-drop-center dark:bg-black">
                <div class="py-4 text-xl tracking-wider text-center text-gray-700 dark:text-gray-400">
                    Tailwind CSS and Select2 single example
                </div>
                <form class="px-8 pt-6 pb-8 mb-4 bg-white border rounded dark:bg-black dark:border-slate-500"
                    method="POST" autocomplete="on" novalidate>

                    <div class="mb-4">
                        <label class="block mb-2 font-bold text-gray-700 dark:text-gray-400 text-md" for="pair">
                            Choose your city:
                        </label>
                        <select class="selectpicker" style="width: 100%" data-placeholder="Select a city..."
                            data-allow-clear="false" title="Select city...">
                            <option>Amsterdam</option>
                            <option>Rotterdam</option>
                            <option>Den Haag</option>
                        </select>
                    </div>
                    <div class="flex items-center justify-between">
                        <a class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:shadow-outline"
                            href="#"> Submit
                        </a>

                        <a class="px-4 py-2 font-semibold text-blue-700 bg-transparent border border-blue-500 rounded hover:bg-blue-600 active:bg-blue-700 hover:text-white hover:border-transparent focus:outline-none focus:shadow-outline"
                            href="#"> Cancel
                        </a>
                    </div>
                </form>
            </div>

            <div class="mt-8 bg-white shadow-drop-center dark:bg-black">
                <div class="py-4 text-xl tracking-wider text-center text-gray-700 dark:text-gray-400">
                    Tailwind CSS and Select2 multiple example
                </div>
                <form class="px-8 pt-6 pb-8 mb-4 bg-white border rounded dark:bg-black dark:border-slate-500"
                    method="POST" autocomplete="on" novalidate>

                    <div class="mb-4">
                        <label class="block mb-2 font-bold text-gray-700 dark:text-gray-400 text-md" for="pair">
                            Choose your cities:
                        </label>
                        <select class="js-example-basic-multiple" style="width: 100%"
                            data-placeholder="Select one or more cities..." data-allow-clear="false" multiple="multiple"
                            title="Select city...">
                            <option>Amsterdam</option>
                            <option>Rotterdam</option>
                            <option>Den Haag</option>
                        </select>
                    </div>
                    <div class="flex items-center justify-between">
                        <a class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:shadow-outline"
                            href="#"> Submit
                        </a>

                        <a class="px-4 py-2 font-semibold text-blue-700 bg-transparent border border-blue-500 rounded hover:bg-blue-600 active:bg-blue-700 hover:text-white hover:border-transparent focus:outline-none focus:shadow-outline"
                            href="#"> Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
