# funciones vue


## ejercicio de práctica vue js

. dentro de las etiquetas html
=> v-bind: (forma corta => :)
    <p :class="variable ? 'selected' : ''"></p>

=> v-on:click (forma corta => @)
    <button @click="incrementar_productos()"></button>
    otros eventos
    @click.stop => stop propagation
    @submit.prevent => preventDefault
=> v-on:up
=> v-on:down

=> v-for
    iterar sobre algún array en la etiqueta que quieras 
    <div v-for="p in productos"></div>
ej con índice:
    <div v-for="p, i in productos">


=> v-if
    <div v-if="true"></div> <= se muestra
    <div v-if="false"></div> <= no se muestra

    <div v-if="true">hola</div>
    <div v-else="false">chau</div>

=> <template></template>
etiqueta que no renderiza ni crea html tags
