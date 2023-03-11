<h1>Gestión de Clientes</h1>
<section class="WWFilter">

</section>
<section class="WWList">
    <table>
        <thead>
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Genero</th>
            <th>Telefono 1</th>
            <th>Telefono 2</th>
            <th>Correo</th>
            <th>Id</th>
            <th>Biografia</th>
            <th>Estado</th>
            <th>Fecha Creacion</th>
            <th>
            {{if new_enabled}}
            <button id="btnAdd">Nuevo</button>
            {{endif new_enabled}}
            </th>
        </tr>
        </thead>
        <tbody>
        {{foreach clientes}}
        <tr>
            <td>{{clientid}}</td>
            <td><a href="index.php?page=mnt_cliente&mode=DSP&clientid={{clientid}}">{{clientname}}</a></td>
            <td>{{clientgender}}</td>
            <td>{{clientphone1}}</td>
            <td>{{clientphone2}}</td>
            <td>{{clientemail}}</td>
            <td>{{clientIdnumber}}</td>
            <td>{{clientbio}}</td>
            <td>{{clientstatus}}</td>
            <td>{{clientdatecrt}}</td>
            <td>
            {{if ~edit_enabled}}
            <form action="index.php" method="get">
                <input type="hidden" name="page" value="mnt_cliente"/>
                <input type="hidden" name="mode" value="UPD" />
                <input type="hidden" name="clientid" value={{clientid}} />
                <button type="submit">Editar</button>
            </form>
            {{endif ~edit_enabled}}
            {{if ~delete_enabled}}
            <form action="index.php" method="get">
                <input type="hidden" name="page" value="mnt_cliente"/>
                <input type="hidden" name="mode" value="DEL" />
                <input type="hidden" name="clientid" value={{clientid}} />
                <button type="submit">Eliminar</button>
            </form>
            {{endif ~delete_enabled}}
            </td>
        </tr>
        {{endfor clientes}}
        </tbody>
    </table>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("btnAdd").addEventListener("click", function (e) {
            e.preventDefault();
            e.stopPropagation();
            window.location.assign("index.php?page=mnt_cliente&mode=INS&clientid=0");
        });
        });
    </script>