module.exports = {
  config: {
    type: 'line',
    data: {
      datasets: [{
        data: [1, -1, 3],
      }],
      labels: ['Label1', 'Label2', 'Label3']
    },
    options: {
      scales: {
        y: {
          ticks: {
            mirror: true
          }
        }
      }
    }
  },
  options: {
    spriteText: true,
    canvas: {
      height: 256,
      width: 512
    }
  }
};
