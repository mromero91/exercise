<template>
  <div class="">
    <div class="w-full">Pokemons</div>
    <div class="flex flex-wrapp">
      <table class="w-full">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Cantidad Habilidades</th>
            <th>Habilidades activas</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(pokemon, key) in pokemons"
            :key="key"
            class="hover:bg-gray-300 py-4 px-4" 
            >
            <td>{{ pokemon.name }}</td>
            <td v-if="pokemon.detail">{{ pokemon.detail.weight }}</td>
            <td v-if="pokemon.detail">{{ pokemon.detail.height }}</td>
            <td v-if="pokemon.detail">{{ pokemon.detail.quantity_abilities }}</td>
            <td v-if="pokemon.detail">{{ pokemon.detail.abilities }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      pokemons: [],
    };
  },
  methods: {
    findDetail(url, index) {
      let self = this;
      axios.get(url)
      .then((response) => {

        let abilities = response.data.abilities.filter(ab => !ab.is_hidden);
        abilities = abilities.map(e => {
          return e.ability.name;
        }).join(', ');

        self.pokemons[index].detail = {
          weight: response.data.weight,
          height: response.data.height,
          quantity_abilities: response.data.abilities.length,
          abilities,
        };

        Vue.set(self.pokemons, index, self.pokemons[index]);
      })
      .catch(e => {
        console.error('findDetail', e);
        return [];
      });
    },
  },
  created() {
    const URL_API = 'https://pokeapi.co/api/v2/pokemon?limit=100&offset=200';

    let self = this;
    axios.get(URL_API)
    .then(response => {
      self.pokemons = response.data.results;
      self.pokemons.map((pokemon, index) => {
        self.findDetail(pokemon.url, index);
      });
    })
    .catch(e => {
      console.error(e);
    })
  },
};
</script>