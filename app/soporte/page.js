import React from 'react';

function Page() {
  return (
    <div className="bg-gray-100 min-h-screen">
        <header className="bg-gradient-to-r from-cyan-500 via-purple-500 to-blue-500 py-3">
            <div className="container mx-auto px-4">
                <div className="flex justify-between items-center">
                    <div className="flex items-center space-x-4">
                        <img src="/assets/iconoempresa.png" alt="Icono de la Empresa" width="80" height="80" className="rounded-full" />
                        <span className="text-white text-xl font-semibold">Monitoreo de Agua Pluvial</span>
                    </div>
                    <nav className="flex items-center space-x-4">
                        <a href="home" className="text-white hover:text-gray-200">Inicio</a>
                        <a href="nosotros" className="text-white hover:text-gray-200">Nosotros</a>
                        <a href="" className="text-white hover:text-gray-200">Cerrar Sesión</a>
                    </nav>
                </div>
            </div>
        </header>
      <main className="container mx-auto px-4 mt-10">
        <section className="bg-white p-6 rounded-lg shadow-md mx-auto w-3/4">
          <form>
            <div className="mb-4">
              <label htmlFor="nombre" className="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
              <input type="text" id="nombre" className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
            </div>
            <div className="mb-4">
              <label htmlFor="email" className="block text-gray-700 text-sm font-bold mb-2">Correo Electrónico</label>
              <input type="email" id="email" className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
            </div>
            <div className="mb-4">
              <label htmlFor="asunto" className="block text-gray-700 text-sm font-bold mb-2">Asunto</label>
              <input type="text" id="asunto" className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
            </div>
            <div className="mb-4">
              <label htmlFor="mensaje" className="block text-gray-700 text-sm font-bold mb-2">Mensaje</label>
              <textarea id="mensaje" className="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4"></textarea>
            </div>
            <div className="flex items-center justify-between">
              <button className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Enviar
              </button>
            </div>
          </form>
        </section>
      </main>
    </div>
  );
}

export default Page;

