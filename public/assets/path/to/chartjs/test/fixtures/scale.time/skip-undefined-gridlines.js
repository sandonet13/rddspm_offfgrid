module.exports = {
  threshold: 0.01,
  tolerance: 0.0025,
  config: {
    type: 'line',
    data: {
      labels: ['2017', '2018', '2019', '2020', '2025'],
      datasets: [{data: [0, 1, 2, 3, 4], fill: false}]
    },
    options: {
      scales: {
        x: {
          type: 'time',
          time: {
            parser: 'YYYY',
            unit: 'year'
          },
          ticks: {
            source: 'auto',
            callback: (tick, index) => index % 2 === 0 ? undefined : tick,
          }
        },
        y: {
          display: false
        }
      }
    }
  },
  options: {
    spriteText: true
  }
};
