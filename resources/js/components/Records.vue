<template>
  <div class="">
    <div class="w-full">Colección</div>
    <div class="flex flex-wrapp">
      <div class="w-1/12">
        <p>Nombre</p>
      </div>
      <div class="w-1/6">
        Fecha inicio
      </div>
      <div class="w-1/6">
        Fecha fin
      </div>
      <div class="w-1/6">
        Inversión
      </div>
      <div class="w-1/6">
        Ganancia
      </div>
      <div class="w-1/6">
        Ganancia anual
      </div>
      <div class="w-1/6">
        Acciones
      </div>
    </div>
    <Record v-for="(peopel, index) in peopels"
      :key="index"
      :people-name="peopel.name"
      />
  </div>
</template>

<script>
import Record from './Record.vue';

export default {
  components: {
    Record,
  },
  data() {
    return {
      peopels: [
        {
          name: 'Miguel Romero',
        }
      ],
    };
  },
  methods: {
  },
  created() {
  },
};
</script>