'use client'
import Image from "next/image";
import { useRouter } from "next/navigation";

export default function Home() {
  const router= useRouter();
  return <main>
    <div className="container">
        <div className="row justify-content-center">
            <div className="col-md-6">
                <div className="login-container">
                    <div className="flex items-center justify-center rounded-full">
                        <Image src="/assets/iconoempresa.png" alt="Logo" width="80" height="80" className="rounded-full"/>
                    </div>
                    <h2 className="text-black">Iniciar Sesión</h2>
                    <form>
                        <div className="form-group">
                            <label className="text-black" for="username">Usuario:</label>
                            <input type="text" id="username" name="username" required className="form-control"/>
                        </div>
                        <div className="form-group">
                            <label className="text-black" for="password">Contraseña:</label>
                            <input type="password" id="password" name="password" required className="form-control"/>
                        </div>
                        <input onClick={()=>{router.push('home')}} type="submit" value="Iniciar sesión" className="btn btn-primary"/>
                    </form>
                    <div className="text-center mt-3">
                        <a href="#" data-toggle="modal" data-target="#recuperarContraseñaModal" className="btn btn-link">Recuperar Contraseña</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div className="modal fade" id="recuperarContraseñaModal" tabindex="-1" role="dialog" aria-labelledby="recuperarContraseñaModalLabel" aria-hidden="true">
  <div className="modal-dialog" role="document">
    <div className="modal-content">
      <div className="modal-header">
        <h5 className="modal-title" id="recuperarContraseñaModalLabel">Recuperar Contraseña</h5>
        <button type="button" className="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div className="modal-body">
        <form id="formRecuperarContraseña">
          <div className="form-group">
            <label className="text-black"  for="email">Ingresa tu correo electrónico:</label>
            <input type="email" className="form-control" id="email" name="email" required/>
          </div>
          <button type="submit" className="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>
  </div>
  </main>
}
