'use client'
import Image from "next/image";
import { useRouter } from "next/router"; 
import React, { useEffect, useState } from 'react';
import '../styles/globals.css'; 


export default function Home() {
  const router = useRouter();
  return (
    <main className="min-h-screen bg-gray-100 flex items-center justify-center">
      <div className="max-w-md w-full space-y-8">
        <div className="flex items-center justify-center">
          <Image src="/assets/iconoempresa.png" alt="Logo" width={80} height={80} className="rounded-full" />
        </div>
        <h2 className="text-2xl font-bold text-center text-gray-800">Iniciar Sesión</h2>
        <form onSubmit={(e) => {
          e.preventDefault();
          router.push('/home'); // Asegúrate de que la ruta sea correcta
        }}>
          <div className="mb-4">
            <label htmlFor="username" className="block text-sm font-medium text-gray-700">Usuario:</label>
            <input type="text" id="username" name="username" required className="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
          </div>
          <div className="mb-4">
            <label htmlFor="password" className="block text-sm font-medium text-gray-700">Contraseña:</label>
            <input type="password" id="password" name="password" required className="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
          </div>
          <div className="flex items-center justify-between">
            <div className="flex items-center">
              <input id="remember_me" name="remember_me" type="checkbox" className="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" />
              <label htmlFor="remember_me" className="ml-2 block text-sm text-gray-900">
                Recordarme
              </label>
            </div>
            <div className="text-sm">
              <a href="#" className="font-medium text-indigo-600 hover:text-indigo-500">
                Olvidé mi contraseña
              </a>
            </div>
          </div>
          <div>
            <button type="submit" className="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Iniciar ses
            </button>
          </div>
        </form>
      </div>
    </main>
  );
}

