<?php
// Inisialisasi nilai variabel awal 
foreach ($scc2 as $scc2_data => $s) {
    $arrValue[] = [$s->value];
    //print_r($s);
    // dd(); 
}
?>

<!-- Dashboard init -->
<script src="/assets/js/pages/dashboard-crm.init.js"></script>

<!-- App js -->
<script src="/assets/js/app.js"></script>
<script src="/assets/js/jquery-3.6.0.min.js"></script>

<!-- Source untuk JavaScript Pendukung Chart (Local Sources) -->
<script src="/assets/libs/chart.js/chart.min.js"></script>
<script src="/assets/libs/chart.js/chart.js@3.3.2.js"></script>
<script src="/assets/libs/chart.js/luxon@1.27.0.js"></script>
<script src="/assets/libs/chart.js/chartjs-adapter-luxon@1.0.0.js"></script>
<script src="/assets/libs/chart.js/chartjs-plugin-streaming@2.0.0.js"></script>
<script src="/assets/libs/chart.js/FileSaver.min.js"></script>
<!-- Source untuk JavaScript Pendukung Chart (Online) -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2"></script>
<script src="https://cdn.jsdelivr.net/npm/luxon@1.27.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1.0.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-streaming@2.0.0"></script> -->

<script>
    //Function Button Save
    $("#save-btn").click(function() {
        $("#myChart2").get(0).toBlob(function(blob) {
            saveAs(blob, "Data-Log-SPM");
        });
    });

    const ctx2 = document.getElementById('myChart2').getContext('2d');
    const vin2 = <?= json_encode($arrValue[0]) ?>;
    const vout2 = <?= json_encode($arrValue[1]) ?>;
    const cin2 = <?= json_encode($arrValue[2]) ?>;
    const cout2 = <?= json_encode($arrValue[3]) ?>;
    const ah2 = <?= json_encode($arrValue[5]) ?>;
    const kwh2 = <?= json_encode($arrValue[6]) ?>;
    const maxvoc2 = <?= json_encode($arrValue[7]) ?>;
    const ahtot2 = <?= json_encode($arrValue[8]) ?>;
    const kwhtot2 = <?= json_encode($arrValue[9]) ?>;
    var vin_parse = parseInt(vin);
    var vout_parse = parseInt(vout);
    var cin_parse = parseInt(cin);
    var cout_parse = parseInt(cout);
    var ah_parse = parseInt(ah);
    var kwh_parse = parseInt(kwh);
    var maxvoc_parse = parseInt(maxvoc);
    var ahtot_parse = parseInt(ahtot);
    var kwhtot_parse = parseInt(kwhtot);

    
    //console.log(parseInt(kwhtot));


    // console.log()
    // Warna Background Chart
    const plugin = {
        id: 'myChart2',
        beforeDraw: (chart) => {
            const {
                ctx
            } = chart;
            ctx.save();
            ctx.globalCompositeOperation = 'destination-over';
            ctx.fillStyle = 'rgba(255, 255, 255, 0.9)';
            ctx.fillRect(0, 0, chart.width, chart.height);
            ctx.restore();
        }
    };


const config = {
  type: 'line',
  data: {
    datasets: [
      {
        data: [],
        backgroundColor: 'rgba(0, 119, 204, 0.5)',
        label: "Vin"
      },
      {
        data: [],
        backgroundColor: 'rgba(119, 119, 204, 0.5)',
        label: "Vout"

      },
      {
        data: [],
        backgroundColor: 'rgba(119, 119, 0, 0.5)',
        label: "Cin"

      },
      {
        data: [],
        backgroundColor: 'rgba(119, 20, 204, 0.5)',
        label: "Cout"

      },
      {
        data: [],
        backgroundColor: 'rgba(0, 119, 20, 0.5)',
        label: "AH"

      },
      {
        data: [],
        backgroundColor: 'rgba(200, 140, 0, 0.5)',
        label: "kWH"

      },
      {
        data: [],
        backgroundColor: 'rgba(0, 12, 204, 0.5)',
        label: "Max Voc"

      },
      {
        data: [],
        backgroundColor: 'rgba(130, 0, 12, 0.5)',
        label: "AH Total"

      },
      {
        data: [],
        backgroundColor: 'rgba(119, 120, 1200, 0.5)',
        label: "kWH Total"

      }
    ]
  },
   options: {
    scales: {
      x: {
        type: 'realtime',
        realtime: {
          duration: 60000,
          refresh: 2000,
          delay: 2500,
          onRefresh: function(chart) {
            chart.data.datasets[0].data.push({
              x: Date.now(),
              y: vin_parse
            });
            chart.data.datasets[1].data.push({
              x: Date.now(),
              y: vout_parse
            });
            chart.data.datasets[2].data.push({
              x: Date.now(),
              y: cin_parse
            });
            chart.data.datasets[3].data.push({
              x: Date.now(),
              y: cout_parse
            });
            chart.data.datasets[4].data.push({
              x: Date.now(),
              y: ah_parse
            });
            chart.data.datasets[5].data.push({
              x: Date.now(),
              y: kwh_parse
            });
            chart.data.datasets[6].data.push({
              x: Date.now(),
              y: maxvoc_parse
            });
            chart.data.datasets[7].data.push({
              x: Date.now(),
              y: ahtot_parse
            });
            chart.data.datasets[8].data.push({
              x: Date.now(),
              y: kwhtot_parse
            });
          }
        }
      }
    }
  }
};

    //init / render line
    const myChart = new Chart(
        document.getElementById('myChart2'),
        config,
    );

</script>