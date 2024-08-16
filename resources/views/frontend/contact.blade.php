@extends('templates.frontend')

@section('content')
    {{-- Contact us big text --}}
    <section class="ecommerce-about bg-primary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="text-center">
                        <h1 class="text-white">Contactanos</h1>
                        <p class="fs-16 mb-0 text-white-75">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Contact fields --}}
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card border border-opacity-25">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="avatar-sm flex-shrink-0">
                                    <div class="avatar-title bg-primary-subtle text-primary rounded fs-17">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h5 class="fs-17 lh-base mb-2">Visitanos</h5>
                                    <p class="text-muted fs-14 mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border border-opacity-25">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="avatar-sm flex-shrink-0">
                                    <div class="avatar-title bg-secondary-subtle text-secondary rounded fs-17">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h5 class="fs-17 lh-base mb-2">Numero de telefono</h5>
                                    <p class="text-muted fs-14 mb-0">+ 502 2222-2222</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border border-opacity-25">
                        <div class="card-body p-4">
                            <div class="d-flex">
                                <div class="avatar-sm flex-shrink-0">
                                    <div class="avatar-title bg-danger-subtle text-danger rounded fs-17">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <h5 class="fs-17 lh-base mb-2">Email</h5>
                                    <p class="text-muted fs-14 mb-0">Ejemplo@correo.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="custom-form card p-4 p-lg-5">
                        <form name="myForm" action="#!">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center mb-4">
                                        <h3 class="text-capitalize">Pregunta por más información</h3>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label for="nameInput" class="form-label">Nombre<span class="text-danger">*</span></label>
                                        <input name="nameInput" id="nameInput" type="text" class="form-control" placeholder="Ingrese su nombre">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label for="emailInput" class="form-label">Email<span class="text-danger">*</span></label>
                                        <input name="emailInput" id="emailInput" type="email" class="form-control" placeholder="Ingrese su correo">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label for="subjectInput" class="form-label">Motivo<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="subjectInput" placeholder="Ingrese su motivo">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label for="messageInput" class="form-label">Mensaje<span class="text-danger">*</span></label>
                                        <textarea name="messageInput" id="messageInput" rows="4" class="form-control" placeholder="Enter message..."></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="text-end mt-4">
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Enviar mensaje<i class="bi bi-arrow-right-short align-middle fs-16 ms-1"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @stop


