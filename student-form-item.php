<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <section class=" pt-0 pb-2 bg-blueGray-50">
        <div class="w-full lg:w-8/12 px-4 mx-auto mt-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t shadow mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-gray-900 text-2xl font-bold">
                            BORANG LESEN BARANG ELEKTRIK
                        </h6>
                        <button class="bg-blue-700 text-white font-bold rounded px-3 py-2">BACK <i class="fa fa-undo" aria-hidden="true" onclick="history.back()"></i></button>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-8 pt-4">
                    <form id="form-item" action="function/send-form-item.php" method="POST">
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-lg font-bold mb-2"
                                        htmlfor="grid-password">
                                        NAMA PELAJAR
                                    </label>
                                    <input type="text" id="name" name="name" required
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-lg font-bold mb-2"
                                        htmlfor="grid-password">
                                        ID (NO.NDP)
                                    </label>
                                    <input type="text" id="id" name="id"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        placeholder="Masukkan NDP anda">
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-lg font-bold mb-2"
                                        htmlfor="grid-password">
                                        PERINGKAT
                                    </label>
                                    <select name="level" id="level"
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value="#" hidden>Pilih :</option>
                                        <option value="SIJIL">SIJIL</option>
                                        <option value="DIPLOMA">DIPLOMA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-lg font-bold mb-2"
                                        htmlfor="grid-password">
                                        KURSUS
                                    </label>
                                    <select name="course" id="course"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value="#" disabled selected>Pilih Kursus: </option>
                                        <option value="Multimedia">Multimedia</option>
                                        <option value="Networking">Networking</option>
                                        <option value="CADD SeniBina">CADD Seni Bina</option>
                                        <option value="Programming">Programming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-lg font-bold mb-2"
                                        htmlfor="grid-password">
                                        Semester
                                    </label>
                                    <select name="sem" id="sem"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value="#" disabled selected>Pilih Semester Anda:</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-lg font-bold mb-2"
                                        htmlfor="grid-password">
                                        Nama barang
                                    </label>
                                    <textarea type="text" id="item_name" name="item_name"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-lg font-bold mb-2"
                                        htmlfor="grid-password">
                                        Kenapa Anda Perlukan Barang Ini?
                                    </label>
                                    <textarea type="text" id="item_reason" name="item_reason"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                                        rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <label class="block" for="file_input">Pilih Gambar [Letak Gambar Barangan Anda]</label>
                        <input type="file" name="image">

                        <hr class="mt-6 border-b-1 border-blueGray-300">
                        <button name="submit"
                            class="bg-green-400 w-full text-white active:bg-pink-600 font-bold text-lg uppercase px-4 py-2.5 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                            type="submit">
                            SUBMIT
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script> 
        // Get references to the level and semester select elements 
        const levelSelect = document.getElementById("level"); 
        const semesterSelect = document.getElementById("sem"); 
 
        // Define the semester options for SIJIL and DIPLOMA 
        const sijilSemesters = ["1", "2", "3", "4"]; 
        const diplomaSemesters = ["4", "5", "6"]; 
 
        // Function to update the semester options based on the selected level 
        function updateSemesterOptions() { 
            // Get the selected level 
            const selectedLevel = levelSelect.value; 
 
            // Clear existing options 
            semesterSelect.innerHTML = ""; 
 
            // Populate the semester options based on the selected level 
            const semesterOptions = selectedLevel === "SIJIL" ? sijilSemesters : diplomaSemesters; 
            semesterOptions.forEach((semester) => { 
                const option = document.createElement("option"); 
                option.value = semester; 
                option.textContent = semester; 
                semesterSelect.appendChild(option); 
            }); 
        } 
 
        // Add an event listener to the level select element 
        levelSelect.addEventListener("change", updateSemesterOptions); 
 
        // Initialize the semester options based on the default selected level 
        updateSemesterOptions(); 
    </script>

</body>

</html>