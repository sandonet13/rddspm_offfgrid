module.exports = {
  config: {
    type: 'bar',
    data: {
      labels: [0, 1, 2, 3, 4, 5],
      datasets: [
        {
          // option in dataset
          data: [0, 5, 10, null, -10, -5],
          borderWidth: function(ctx) {
            var value = ctx.dataset.data[ctx.dataIndex] || 0;
            return Math.abs(value);
          }
        },
        {
          // option in element (fallback)
          data: [0, 5, 10, null, -10, -5]
        }
      ]
    },
    options: {
      elements: {
        bar: {
          backgroundColor: 'transparent',
          borderColor: '#888',
          borderWidth: function(ctx) {
            return ctx.dataIndex * 2;
          }
        }
      },
      scales: {
        x: {display: false},
        y: {
          display: false,
          beginAtZero: true
        }
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
