'use client'
import React from 'react';

function Nosotros() {
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
              <a href="soporte" className="text-white hover:text-gray-200">Soporte</a>
              <a href="" className="text-white hover:text-gray-200">Cerrar Sesión</a>
            </nav>
          </div>
        </div>
      </header>
      <main className="container mx-auto px-4 mt-10">
      <section className="bg-white p-6 rounded-lg shadow-md">
        <div className="flex justify-between">
          <div>
            <h2 className="text-center text-2xl font-bold mb-4 text-blue-800">¡Conocemos el agua pluvial!</h2>
            <p className="text-gray-700">Somos una empresa dedicada al monitoreo de agua pluvial, con el objetivo de ayudar a las personas a aprovechar este valioso recurso de manera eficiente y sostenible.</p>
            <ul className="list-disc text-gray-700 mt-4">
              <li>Monitoreo de la calidad del agua pluvial</li>
              <li>Diseño de sistemas de captación y almacenamiento</li>
              <li>Asesoría para el uso eficiente del agua pluvial</li>
            </ul>
          </div>
          <div>
            <img src="/assets/captacionagua.jpg" alt="Imagen 1" className="rounded-lg shadow-sm" />
          </div>
        </div>
      </section>
      <section className="flex justify-between mt-10">
        <section className="w-1/2">
          <div className="bg-white p-6 rounded-lg shadow-md">
            <div className="flex justify-between">
              <div>
                <h3 className="text-center text-2xl text-blue-800">Misión</h3>
                <p className="text-center text-gray-700">Diseñar e implementar sistemas de recolección de agua pluvial para reducir el consumo de agua potable y promover prácticas sostenibles de gestión del agua.</p>
              </div>
            </div>
          </div>
        </section>
        <section className="w-1/2">
          <div className="bg-white p-6 rounded-lg shadow-md">
            <div className="flex justify-between">
              <div>
                <h3 className="text-center text-2xl text-blue-800">Visión</h3>
                <p className="text-center text-gray-700">Convertirse en un referente en gestión sostenible del agua, creando conciencia sobre el uso responsable del agua y promoviendo la implementación de sistemas similares en otras organizaciones.</p>
              </div>
            </div>
          </div>
        </section>
      </section>
        <section className="mt-10 text-center">
          <a href="contacto.php" className="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Contáctanos</a>
        </section>
      </main>
    </div>
  );
}

export default Nosotros;
