module.exports = {
  description: 'https://github.com/chartjs/Chart.js/issues/4234',
  config: {
    type: 'line',
    options: {
      scales: {
        y: {
          max: 27,
          min: -3,
          ticks: {
            stepSize: 3,
          }
        },
        x: {
          display: false
        }
      }
    }
  },
  options: {
    spriteText: true
  }
};
