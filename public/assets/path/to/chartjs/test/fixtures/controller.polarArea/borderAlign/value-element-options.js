module.exports = {
  config: {
    type: 'polarArea',
    data: {
      labels: [0, 1, 2, 3, 4, 5],
      datasets: [
        {
          // option in element (fallback)
          data: [0, 2, 4, null, 6, 8],
        }
      ]
    },
    options: {
      elements: {
        arc: {
          backgroundColor: 'transparent',
          borderAlign: 'center',
          borderColor: '#0000ff',
          borderWidth: 4,
        }
      },
      scales: {
        r: {
          display: false
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
