<div class="row">
    <div class="col-md-12">
        <h2 class="text-center">Nuevo Paciente</h2>
        <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=addpacient" role="form">
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
                <div class="col-md-6">
                    <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
                <div class="col-md-6">
                    <input type="text" name="lastname" required class="form-control" id="lastname"
                        placeholder="Apellido">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Edad*</label>
                <div class="col-md-6">
                    <input type="text" name="edad" required class="form-control" id="edad" placeholder="Edad">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Genero*</label>
                <div class="col-md-6">
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox1" name="gender" required value="h"> Hombre
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox2" name="gender" required value="m"> Mujer
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Fecha de
                    Nacimiento</label>
                <div class="col-md-6">
                    <input type="date" name="day_of_birth" class="form-control" id="address1"
                        placeholder="Fecha de Nacimiento">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Enfermedad</label>
                <div class="col-md-6">
                    <textarea name="sick" class="form-control" id="sick" placeholder="Enfermedad"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Medicamentos</label>
                <div class="col-md-6">
                    <textarea name="medicaments" class="form-control" id="sick" placeholder="Medicamentos"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Alergia</label>
                <div class="col-md-6">
                    <textarea name="alergy" class="form-control" id="sick" placeholder="Alergia"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Estado
                    Civil*</label>
                <div class="col-md-6">
                    <input type="text" name="estado" class="form-control" id="estado" placeholder="Estado Civil">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Ocupación*</label>
                <div class="col-md-6">
                    <input type="text" name="ocupacio" class="form-control" id="ocupacio" placeholder="Direccion">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
                <div class="col-md-6">
                    <input type="text" name="address" class="form-control" id="address1" placeholder="Direccion">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
                <div class="col-md-6">
                    <input type="text" name="email" class="form-control" id="email1" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
                <div class="col-md-6">
                    <input type="text" name="phone" class="form-control" id="phone1" placeholder="Telefono">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <h3 class=" text-center bg-primary" style="background: #204051;">Interrogatorio Bucal SI NO </h3>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-5 control-label">¿Molestia o dolor de boca?</label>
                <div class="col-md-6">
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox1" required value="a"> Si
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox2" required value="b"> No
                    </label>
                    <label class="">
                        <input type="text" class="form-control" id="" placeholder="">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-5 control-label">¿Mal olor o mal sabor de boca?</label>
                <div class="col-md-6">
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox3" required value="c"> Si
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox4" required value="d"> No
                    </label>
                    <label class="">
                        <input type="text" class="form-control" id="" placeholder="">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-5 control-label">¿Le sangra las encias?</label>
                <div class="col-md-6">
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox5" required value="e"> Si
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox6" required value="f"> No
                    </label>
                    <label class="">
                        <input type="text" name="" class="form-control" id="" placeholder="">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-5 control-label">¿Sientes sus dientes móviles, aprieta o rechina
                    sus dientes?</label>
                <div class="col-md-6">
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox1" required value="y"> Si
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox2" required value="z"> No
                    </label>
                    <label class="">
                        <input type="text" name="" class="form-control" id="" placeholder="">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-5 control-label">¿Malos hábitos orofaciales?(mordes las uñas,
                    chupar los dedos,morder el lapiz)?</label>
                <div class="col-md-6">
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox1" required value="g"> Si
                    </label>
                    <label class="checkbox-inline">
                        <input type="radio" id="inlineCheckbox2" required value="t"> No
                    </label>
                    <label class="">
                        <input type="text" name="" class="form-control" id="" placeholder="">
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-5 control-label">Fecha de su última consulta</label>
                <div class="col-md-6">
                    <input type="date" name="day" class="form-control" id="address3" placeholder="Fecha d">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-5 control-label">¿Cuantas veces al día cepilla sus
                    dientes?</label>
                <div class="col-md-6">
                    <input type="text" name="" class="form-control" id="p" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-5 control-label">¿Aparte del cepillo utiliza aditamentos para
                    limpiar sus dientes?</label>
                <div class="col-md-6">
                    <input type="text" placeholder="">
                    <label for="inputEmail1" class="control-label">¿Cuales?*<input type="text" name=""
                            placeholder=""></label>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail1" class="col-lg-5 control-label">¿Motivo de consulta?</label>
                <div class="col-md-6">
                    <input type="text" name="" class="form-control" id="" placeholder="">
                </div>
            </div>
            <!-- <p class="alert alert-danger">* Campos obligatorios</p> -->
            <div class="form-group">
                <div class="col-lg-offset-4 col-lg-12">
                    <button type="submit" class="btn btn-primary">Agregar
                        Paciente</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</section>
</div>
</div>
</form>
</div>
</div>
</div>
</div>