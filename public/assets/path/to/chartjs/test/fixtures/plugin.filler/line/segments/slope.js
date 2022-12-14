function slope({p0, p1}) {
  return (p0.y - p1.y) / (p1.x - p0.x);
}

module.exports = {
  config: {
    type: 'line',
    data: {
      labels: ['a', 'b', 'c', 'd', 'e', 'f'],
      datasets: [{
        data: [1, 2, 3, 3, 2, 1],
        backgroundColor: 'black',
        borderColor: 'orange',
        fill: true,
        segment: {
          backgroundColor: ctx => slope(ctx) > 0 ? 'green' : slope(ctx) < 0 ? 'red' : undefined,
        }
      }]
    },
    options: {
      plugins: {
        legend: false
      },
      scales: {
        x: {display: false},
        y: {display: false}
      }
    }
  }
};
