module.exports = {
  config: {
    type: 'line',
    data: {
      labels: [0, 1, 2, 3, 4, 5],
      datasets: [
        {
          data: [3, 1, 2, 0, 8, 1],
          backgroundColor: '#ff0000',
          order: 2
        },
        {
          data: [0, 4, 2, 6, 4, 8],
          backgroundColor: '#00ff00',
          order: 1
        }
      ]
    },
    options: {
      elements: {
        line: {
          fill: true
        },
        point: {
          radius: 0
        }
      },
      layout: {
        padding: 32
      },
      scales: {
        x: {display: false},
        y: {display: false}
      },
      plugins: {
        legend: false,
        title: false,
        tooltip: false,
        filler: true
      }
    }
  },
  options: {
    canvas: {
      height: 256,
      width: 512
    }
  }
};
