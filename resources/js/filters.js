Vue.filter('number_format', (value, decimals) => {

  value = (!Number(value)) ? 0 : value;
  if (decimals == 0 ||  decimals == undefined) return Number(value).toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ",");

  try {
    value = Number(value).toFixed(decimals).replace(',', '');
    let parts = value.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
  } catch(e) {
    return value;
  }
});
