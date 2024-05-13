'use client'
import Image from "next/image";
import { useRouter } from "next/navigation";

export default function Home() {
  const router= useRouter();
  return (
    <main className="bg-gradient-to-r from-cyan-500 via-purple-500 to-blue-500 min-h-screen flex items-center justify-center">
      <div className="max-w-md mx-auto space-y-8 bg-white p-8 rounded-lg shadow-md">
        <div className="flex items-center justify-center mb-4">
          <Image src="/assets/iconoempresa.png" alt="Logo" width={100} height={100} className="rounded-full" /> {/* Aumentado el tamaño del logo */}
        </div>
        <h2 className="text-2xl font-bold text-center text-gray-800 mb-4">Iniciar Sesión</h2>
        <form onSubmit={(e) => {
          e.preventDefault();
          router.push('/home'); 
        }}>
          <div className="mb-4">
            <label htmlFor="username" className="block text-sm font-medium text-gray-700">Usuario:</label>
            <input type="text" id="username" name="username" required className="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
          </div>
          <div className="mb-4">
            <label htmlFor="password" className="block text-sm font-medium text-gray-700">Contraseña:</label>
            <input type="password" id="password" name="password" required className="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
          </div>
          <div className="flex items-center justify-between mb-4">
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
              Iniciar sesión
            </button>
          </div>
        </form>
      </div>
    </main>
  );
}