<x-layout title="Register">
    <div class="container">
        <h1 class="text-3xl text-center">Formulario</h1>
        <div class="flex justify-center h-screen ">
            <div class="grid grid-cols-3 gap-3 mt-6">

                <div class="col-span-3 ">
                    <label class="font-bold "  for="">Nombre</label>
                    <input class="shadow-2xl rounded-lg p-2 w-full" type="text" name="nombre" id="" required>
                </div>
                

                <div class="col-span-2">
                    <label class="font-bold" for="">Calle</label>
                    <input  class="shadow-2xl rounded-lg p-2 w-full" type="text" name="calle" id="" required>
                </div>

                <div>
                    <label class="font-bold" for="">CP</label>
                    <input class="shadow-2xl rounded-lg p-2 w-full" type="text" name="" id="" required>
                </div>

                <div>
                    <label class="font-bold" for="">Num Ext</label>
                    <input class="shadow-2xl rounded-lg p-2 w-full" type="text" name="" id="" required>
                </div>

                <div>
                    <label class="font-bold" for="">Num Int</label>
                    <input class="shadow-2xl rounded-lg p-2 w-full"  type="text" name="" id="" required>
                </div>

                <div>
                    <label class="font-bold" for="">Pais</label>
                    <input class="shadow-2xl rounded-lg p-2 w-full" type="text" name="" id="" required>
                </div>

                <div>
                    <label class="font-bold" for="">Imagen</label>
                    <input class=" w-full" type="file" name="" id="" >
                </div>

                <div>
                    <label class="font-bold" for="">Descripcion</label>
                    <textarea class="shadow-2xl rounded-lg p-2 w-full" name="" id="" required></textarea>
                </div>

            </div>
        </div>
    </div>
</x-layout>