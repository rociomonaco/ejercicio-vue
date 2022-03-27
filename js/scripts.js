
const maquinaAutoservicio = {
    data() {
        return {
            productos : window.productos
        }
    },
    methods: {
        total() {
            let total = 0;
            this.productos.forEach(p => {
                if(p.activo){
                    total += p.valor * p.cantidad;
                }
            });
            return (total).toFixed(2);
        },
        activar_producto(i) {
           this.productos[i].activo = !this.productos[i].activo; 
        },
        activar_clase_activa(i) {
            let clase = "";
            if ( this.productos[i].activo ) {
                clase = "selected";
            }
            return clase;
        }
    }
}

Vue.createApp(maquinaAutoservicio).mount("#app");
