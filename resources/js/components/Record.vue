<template>
  <div class="flex flex-wrapp">
      <div class="w-1/12">
        <p>{{ people.name }}</p>
      </div>
      <div class="w-1/6 px-2">
        <input type="text"
          v-model="people.date_init"
          class="input"
          >
      </div>
      <div class="w-1/6 px-2">
        <input type="text"
          v-model="people.date_end"
          class="input"
          >
      </div>
      <div class="w-1/6 px-2 grid">
        <input type="text"
          v-model="people.investment"
          class="input text-right w-full"
          >
        <span class="text-right">${{ people.investment | number_format(2) }}</span>
      </div>
      <div class="w-1/6 px-2 grid">
        <input type="text"
          v-model="people.profit"
          class="input text-right w-full"
          disabled="true"
          >
        <span class="text-right">${{ people.profit | number_format(2) }}</span>
      </div>
      <div class="w-1/6 px-2 grid">
        <input type="text"
          v-model="people.profit_annual"
          class="input text-right w-full"
          disabled="true"
          >
        <span class="text-right">${{ people.profit_annual | number_format(2) }}</span>
      </div>
      <div class="w-1/6">
        <span @click="find()"
          class="cursor-pointer float-right"
          >
          <svg class="h-4 inline-block"
            fill="none"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke="currentColor"
            >
            <path d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4">
            </path>
          </svg>
          Calcular
        </span>
      </div>
    </div>
</template>

<script>
import axios from 'axios';
import moment from 'moment';
export default {

  name: 'Record',
  props: ['peopleName'],

  data() {
    const TODAY = new Date();
    return {
      moment: moment,
      people: {
        name: '',
        date_init: `${TODAY.getFullYear()}-${TODAY.getMonth()}-${TODAY.getDate()}`,
        date_end: `${TODAY.getFullYear()+1}-${TODAY.getMonth()}-${TODAY.getDate()}`,
        investment: 100000,
        profit: '',
        profit_annual: '',
      },
    };
  },
  methods: {
    find() {
      let self = this;
      axios.get('/', {
        date_init: this.people.date_init,
        date_end: this.people.date_end,
        profit: this.people.profit,
      })
      .then(response => {
        const diff_in_months = self.moment(self.people.date_end).diff(self.people.date_init, 'months');
        self.people.profit = (response.data.profit_per_monthly*diff_in_months).toFixed(2);
        self.people.profit_annual = response.data.profit_annual;
      });
    },
  },
  created() {
    this.people.name = this.peopleName;
  },
};
</script>

<style lang="css" scoped>
</style>
