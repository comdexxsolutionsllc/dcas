@extends('layouts.sidebar')
@section('content')

    <div class="primary">

        <div style="width:50%">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                            <label for="disabled">Disabled</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed congue sem. Vestibulum sapien ipsum, lacinia elementum auctor in, euismod eu purus. Quisque tristique, velit at auctor tempor, lorem magna faucibus turpis, quis rhoncus diam nisi id leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean venenatis magna eu consequat pretium. Pellentesque arcu tellus, vestibulum non ligula quis, viverra commodo sapien. Etiam felis felis, aliquet quis molestie vel, varius vel velit. Sed auctor semper metus sed lacinia. Phasellus non volutpat risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

    <p>Cras luctus, urna sed placerat fringilla, sapien nulla ultricies sem, id tincidunt enim libero sed purus. Integer eu neque ipsum. Fusce mattis quam nec tempor placerat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vitae hendrerit lorem, vitae eleifend leo. Pellentesque mattis eleifend velit, eget mollis libero pretium non. Integer facilisis neque non magna hendrerit, non mollis quam porttitor. Nunc volutpat porta purus quis posuere. Curabitur vitae sagittis ex, a porttitor sem. Vivamus efficitur gravida nisi. Suspendisse nisl neque, aliquet quis blandit sed, facilisis vel est. Nulla sollicitudin augue id vehicula porta. Nullam tristique lobortis odio, ut aliquam enim rhoncus eu.</p>

    <p>Donec malesuada diam at erat hendrerit, in euismod neque lobortis. Nullam fermentum dolor odio, eget rhoncus est accumsan quis. Aliquam erat ante, consectetur sed semper ut, pulvinar et sem. In hac habitasse platea dictumst. Integer feugiat dignissim venenatis. Suspendisse consequat nibh leo, ac tempus diam vulputate vel. Praesent leo ligula, eleifend eu est ac, venenatis finibus ex. Suspendisse potenti. Vivamus maximus, justo vel ultrices ultrices, lacus diam fermentum tortor, vitae pulvinar turpis felis id enim. Nam ac tempus leo. Integer tortor neque, volutpat sit amet fermentum vitae, blandit non nibh. Aliquam ut volutpat tortor. Duis pharetra ipsum non lorem accumsan facilisis. Etiam maximus aliquam elit ut varius. Ut mollis massa nec libero ornare, sit amet pretium enim lacinia.</p>

    <p>Phasellus et massa ac lectus dictum pulvinar. Donec vitae ante sodales, faucibus neque nec, varius purus. Proin ultrices erat eu mi auctor lacinia. Aenean lobortis laoreet eros, et posuere risus tempus et. Phasellus varius, velit nec finibus semper, sapien mauris iaculis orci, non molestie nisl sapien in turpis. Vivamus non leo placerat urna dignissim consequat. Fusce quis mattis tortor.</p>

    <p>Sed interdum commodo laoreet. Nunc ac pellentesque turpis. Ut mollis luctus lacus id luctus. Aliquam aliquet ante malesuada, bibendum lorem nec, posuere velit. Donec mattis accumsan ligula, vel tincidunt turpis imperdiet non. Ut placerat urna vitae quam pulvinar posuere. Maecenas maximus libero quis tellus gravida lacinia. Cras rutrum neque lectus, quis molestie urna ultricies vel. Curabitur at mattis metus, vitae vehicula turpis. Integer consectetur, ex in placerat lacinia, ex risus egestas ex, eu volutpat velit quam quis sapien. Suspendisse fringilla libero ac sapien ultricies, vitae tristique purus ornare.</p>

    </div>

@stop
