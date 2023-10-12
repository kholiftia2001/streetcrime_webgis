var mapView = new ol.View({
  center: ol.proj.fromLonLat([110.52722800210873, -7.874263320317942]),
  zoom: 10,
});

var map = new ol.Map({
  target: 'map',
  view: mapView,
  controls: []
});

var noneTile = new ol.layer.Tile({
  title: 'None',
  type: 'base',
  visible: false
});

var osmTile = new ol.layer.Tile({
  title: 'Open Street Map',
  visible: true,
  type: 'base',
  source: new ol.source.OSM()
});

//group layer
var baseGroup = new ol.layer.Group({
  title: 'Base Maps',
  fold: true,
  layers: [osmTile, noneTile]
});
map.addLayer(baseGroup);

// Buat sumber vektor dari GeoJSON
var batasSource = new ol.source.Vector({
  url: 'data/data.geojson',
  format: new ol.format.GeoJSON(),
});

// Buat layer vektor
var batasLayer = new ol.layer.Vector({
  title: 'Batas Administrasi',
  source: batasSource,
  style: function (feature) {
    // Gaya default
    var defaultStyle = new ol.style.Style({
      fill: new ol.style.Fill({
        color: 'rgba(5, 88, 139, 0.1)' // Warna isian default
      }),
      stroke: new ol.style.Stroke({
        color: 'rgba(5, 88, 139, 0.4)', // Warna garis default
        width: 1 // Lebar garis default
      })
    });

    // Gaya ketika fitur diklik
    var selectedStyle = new ol.style.Style({
      fill: new ol.style.Fill({
        color: '#E57C23' // Warna isian saat diklik
      }),
      stroke: new ol.style.Stroke({
        color: '#E57C23', // Warna garis saat diklik
        width: 1 // Lebar garis saat diklik
      })
    });

    // Periksa apakah fitur saat ini diklik atau tidak
    if (feature.get('clicked')) {
      return selectedStyle;
    } else {
      return defaultStyle;
    }
  }
});

map.addLayer(batasLayer);

var overlay = new ol.Overlay({
  element: document.getElementById('popup'),
  autoPan: true,
  autoPanAnimation: {
    duration: 150
  }
});
map.addOverlay(overlay);

var popupContent = document.getElementById('popup-content');
var popupCloser = document.getElementById('popup-closer');

var popupProperties = ['KAL_KEL', 'KEC_KAPN', 'KAB_KOTA'];
var propertyAliases = {
  KAL_KEL: 'Kalurahan',
  KEC_KAPN: 'Kecamatan',
  KAB_KOTA: 'Kabupaten'
};

var selectedFeature = null; // Menyimpan referensi fitur yang sedang dipilih

map.on('singleclick', function (evt) {
  overlay.setPosition(undefined);
  map.forEachFeatureAtPixel(evt.pixel, function (feature) {
    var coordinates = evt.coordinate;
    var properties = feature.getProperties();
    var content = '<ul>';
    for (var property in properties) {
      if (properties.hasOwnProperty(property) && popupProperties.includes(property)) {
        var alias = propertyAliases[property] || property;
        content += '<li><b>' + alias + ':</b> ' + properties[property] + '</li>';
      }
    }
    content += '</ul>';
    popupContent.innerHTML = content;
    overlay.setPosition(coordinates);

    // Cek apakah ada fitur sebelumnya yang sedang dipilih
    if (selectedFeature && selectedFeature !== feature) {
      // Reset properti 'clicked' pada fitur sebelumnya
      selectedFeature.set('clicked', false);
      // Perbarui gaya pada fitur sebelumnya menjadi default
      selectedFeature.setStyle(null);
    }

    // Setel properti 'clicked' pada fitur yang diklik
    feature.set('clicked', true);
    // Perbarui gaya pada fitur yang diklik
    feature.setStyle(batasLayer.getStyle());

    // Simpan referensi fitur yang sedang dipilih
    selectedFeature = feature;
  });
});

popupCloser.onclick = function () {
  overlay.setPosition(undefined);
  popupCloser.blur();

  // Reset properti 'clicked' pada fitur yang dipilih
  if (selectedFeature) {
    selectedFeature.set('clicked', false);
    selectedFeature.setStyle(null);
    selectedFeature = null;
  }

  return false;
};

// layer klitih
// var klitihSource = new ol.source.Vector({
//   format: new ol.format.GeoJSON(),
//   url: 'http://localhost:8080/geoserver/crime/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=crime%3Amergeklitih&maxFeatures=200&outputFormat=application%2Fjson',
//   attributions: '@geoserver',
//   strategy: ol.loadingstrategy.bbox
// });

// var klitihLayer = new ol.layer.Vector({
//   title: 'Persebaran Klitih',
//   source: klitihSource
// });
// map.addLayer(klitihLayer);

// document.addEventListener('DOMContentLoaded', function () {
//   var yearFilter = document.getElementById('year-filter');
//   var kabupatenFilter = document.getElementById('kabupaten-filter');

//   function updateFilter() {
//     var selectedYear = yearFilter.value;
//     var selectedKabupaten = kabupatenFilter.value;
//     var cqlFilter = '';

//     if (selectedYear !== '') {
//       if (selectedYear === '') {
//         cqlFilter += '(tahun=2020 OR tahun=2021 OR tahun=2022 OR tahun=2023)';
//       } else {
//         cqlFilter += 'tahun=' + selectedYear;
//       }
//     }

//     if (selectedKabupaten !== '') {
//       if (cqlFilter !== '') {
//         cqlFilter += ' AND ';
//       }
//       cqlFilter += 'kabupaten=\'' + selectedKabupaten + '\'';
//     }

//     // Mengatur filter CQL pada URL sumber data WFS
//     var url = 'http://localhost:8080/geoserver/crime/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=crime%3Amergeklitih&maxFeatures=200&outputFormat=application%2Fjson&CQL_FILTER=' + encodeURIComponent(cqlFilter);
//     klitihSource.setUrl(url);

//     // Memperbarui layer WFS
//     klitihSource.refresh();
//   }

//   yearFilter.addEventListener('change', updateFilter);
//   kabupatenFilter.addEventListener('change', updateFilter);
// });

var klitihSource = new ol.source.Vector({
  format: new ol.format.GeoJSON(),
  url: 'data/klitih.geojson',
});

var originalFeatures = []; // Store the original features separately

klitihSource.on('change', function () {
  if (klitihSource.getState() === 'ready') {
    originalFeatures = klitihSource.getFeatures();

    // Set style for the layer
    klitihLayer.setStyle(customStyleFunction);
  }
});

var klitihLayer = new ol.layer.Vector({
  title: 'Persebaran Klitih',
  source: klitihSource,
});

function customStyleFunction(feature) {
  var year = feature.get('tahun');
  // Define your custom style for each feature
  var style = new ol.style.Style({
    image: new ol.style.Circle({
      radius: 3,
      fill: new ol.style.Fill({
        color: getColorByYear(year) // Get color based on the year
      }),
      stroke: new ol.style.Stroke({
        color: getColorByYear(year),
        width: 1
      })
    }),
    // Add more style properties as needed
  });

  return style;
}
// Function to get color based on the year
function getColorByYear(year) {
  // Define color mapping based on the year
  var colorMap = {
    '2020': 'rgba(200, 0, 0, 1)', // Red color for year 2020
    '2021': 'rgba(0, 200, 0, 1)', // Green color for year 2021
    '2022': 'rgba(0, 0, 200, 1)', // Blue color for year 2022
    '2023': 'rgba(0, 0, 0, 1)' //Black
    // Add more color mappings for other years
  };

  // Return the color based on the year
  return colorMap[year] || 'rgba(0, 0, 0, 1)'; // Default to black color if year is not mapped
}
map.addLayer(klitihLayer);

// Overlay untuk klitihLayer
var klitihOverlay = new ol.Overlay({
  element: document.getElementById('klitih-popup'),
  autoPan: true,
  autoPanAnimation: {
    duration: 150
  }
});
map.addOverlay(klitihOverlay);

// Filter Layer
function updateFilter() {
  var selectedYear = document.getElementById('year-filter').value;
  var selectedKabupaten = document.getElementById('kabupaten-filter').value;
  var selectedZona = document.getElementById('zona-filter').value;

  var filteredFeatures = originalFeatures.filter(function (feature) {
    var year = feature.get('tahun');
    var kabupaten = feature.get('kabupaten');
    var zona = feature.get('zona');

    var showFeature = true;

    if (selectedYear && year != selectedYear) {
      showFeature = false;
    }

    if (selectedKabupaten && kabupaten != selectedKabupaten) {
      showFeature = false;
    }

    if (selectedZona && zona !== selectedZona) { // Tambahkan blok ini
      showFeature = false;
    }

    return showFeature;
  });

  // Update the filtered count
  var filteredCountElement = document.getElementById('filtered-count');
  filteredCountElement.textContent = 'Jumlah Data: ' + filteredFeatures.length;

  // Create a new source with filtered features
  var filteredSource = new ol.source.Vector({
    features: filteredFeatures,
  });

  // Set the new source for the layer
  klitihLayer.setSource(filteredSource);
}

var yearFilter = document.getElementById('year-filter');
var kabupatenFilter = document.getElementById('kabupaten-filter');
var zonaFilter = document.getElementById('zona-filter');

yearFilter.addEventListener('change', updateFilter);
kabupatenFilter.addEventListener('change', updateFilter);
zonaFilter.addEventListener('change', updateFilter);

klitihSource.on('change', function () {
  if (klitihSource.getState() === 'ready') {
    originalFeatures = klitihSource.getFeatures();
    updateFilter(); // Panggil fungsi updateFilter() saat data siap
  }
});

function toggleFilter() {
  var filterNavbar = document.querySelector('.navibar');
  filterNavbar.classList.toggle('hidden');
}

// TIMESLIDER

// HEATMAP
var heatmap = new ol.layer.Heatmap({
  title: 'Heatmap Persebaran Klitih',
  source: klitihSource,
  blur: 15,
  radius: 5,
  gradient: ['#00f', '#0ff', '#0f0', '#ff0', '#f00'],
  visible: true
});
map.addLayer(heatmap);

var minOpacity = 0.3; // Minimum opacity value for the heatmap
var maxOpacity = 1.0; // Maximum opacity value for the heatmap
var animationInterval = 1000; // Animation interval in milliseconds

var currentOpacity = minOpacity; // Initial opacity value
var increasing = true; // Flag to indicate whether opacity is increasing or decreasing

function updateHeatmapOpacity() {
  if (increasing) {
    currentOpacity += 1;
    if (currentOpacity >= maxOpacity) {
      currentOpacity = maxOpacity;
      increasing = false;
    }
  } else {
    currentOpacity -= 1;
    if (currentOpacity <= minOpacity) {
      currentOpacity = minOpacity;
      increasing = true;
    }
  }

  heatmap.setOpacity(currentOpacity);
}

// ANIMASI HEATMAP
// Start the animation
var animationId;

function startAnimation() {
  animationId = setInterval(function () {
    updateHeatmapOpacity();
  }, animationInterval);
}

// Stop the animation
function stopAnimation() {
  clearInterval(animationId);
}

// Start the animation when the heatmap layer is ready
heatmap.getSource().on('change', function () {
  if (heatmap.getSource().getState() === 'ready') {
    startAnimation();
  }
});

// Stop the animation when the heatmap layer is removed
map.getLayers().on('remove', function (event) {
  if (event.element === heatmap) {
    stopAnimation();
  }
});

// LEGENDA HEATMAP
// function toggleHeatmapLegend() {
//   var legendElement = document.getElementById('heatmap-legend');
//   legendElement.style.display = heatmap.getVisible() ? 'flex' : 'none';
// }

// // Tambahkan event listener saat layer heatmap berubah visibilitas
// heatmap.on('change:visible', toggleHeatmapLegend);

// // Tambahkan kode untuk membuat legenda heatmap
// var gradient = ['#00f', '#0ff', '#0f0', '#ff0', '#f00'];
// var labels = ['Rendah', 'Cukup Rendah', 'Sedang', 'Cukup Tinggi', 'Tinggi'];

// var legendElement = document.getElementById('heatmap-legend');

// for (var i = 0; i < gradient.length; i++) {
//   var legendEntry = document.createElement('div');
//   legendEntry.style.background = gradient[i];
//   legendEntry.textContent = labels[i];
//   legendElement.appendChild(legendEntry);
// }

// SKALA
var scaleControl = new ol.control.ScaleLine({
  // bar: true,
  text: true
});
map.addControl(scaleControl);

// GEOLOCATION
var geolocation = new ol.Geolocation({
  trackingOptions: {
    enableHighAccuracy: true
  },
  projection: map.getView().getProjection()
});

var geolocationButton = document.getElementById('geolocation-button');
geolocationButton.addEventListener('click', function () {
  geolocation.setTracking(true);
});

geolocation.on('change:position', function () {
  var coordinates = geolocation.getPosition();
  if (coordinates) {
    map.getView().animate({ center: coordinates, zoom: 16 });
    geolocation.setTracking(false);

    // Tambahkan fitur marker di lokasi pengguna
    var markerFeature = new ol.Feature(new ol.geom.Point(coordinates));
    var markerSource = new ol.source.Vector({
      features: [markerFeature]
    });
    var markerLayer = new ol.layer.Vector({
      source: markerSource,
      style: new ol.style.Style({
        image: new ol.style.Circle({
          radius: 7, // Atur ukuran titik sesuai kebutuhan Anda
          fill: new ol.style.Fill({
            color: 'blue' // Atur warna titik sesuai kebutuhan Anda
          }),
          stroke: new ol.style.Stroke({
            color: 'white', // Atur warna garis tepi titik sesuai kebutuhan Anda
            width: 3 // Atur lebar garis tepi titik sesuai kebutuhan Anda
          })
        })
      })
    });
    map.addLayer(markerLayer);

    // Tambahkan fitur buffer di sekitar lokasi pengguna
    var bufferFeature = new ol.Feature(
      new ol.geom.Circle(coordinates, 500) // Ubah 100 dengan jari-jari buffer yang Anda inginkan (dalam meter)
    );
    var bufferSource = new ol.source.Vector({
      features: [bufferFeature]
    });
    var bufferLayer = new ol.layer.Vector({
      source: bufferSource,
      style: new ol.style.Style({
        stroke: new ol.style.Stroke({
          color: '#5389c2',
          width: 1
        }),
        fill: new ol.style.Fill({
          color: 'rgba(197, 234, 245, 0.2)'
        })
      })
    });
    map.addLayer(bufferLayer);
  }
});

// pencarian dengan suggestion
var searchInput = document.getElementById('searchInput');
var suggestionsList = document.getElementById('suggestions');

searchInput.addEventListener('input', function () {
  var keyword = this.value.toLowerCase();
  var suggestions = [];

  if (keyword.trim() !== '') {
    batasSource.forEachFeature(function (feature) {
      var name = feature.get('KAL_KEL');
      if (name && name.toLowerCase().indexOf(keyword) !== -1) {
        suggestions.push(name);
      }
    });
  }

  showSuggestions(suggestions);
});

function showSuggestions(suggestions) {
  suggestionsList.innerHTML = '';

  if (suggestions.length > 0) {
    suggestions.forEach(function (suggestion) {
      var li = document.createElement('li');
      li.textContent = suggestion;
      suggestionsList.appendChild(li);

      li.addEventListener('click', function () {
        searchFeature(this.textContent);
      });
    });
  }
}

function searchFeature(keyword) {
  var features = batasSource.getFeatures();

  features.forEach(function (feature) {
    var name = feature.get('KAL_KEL');
    if (name && name.toLowerCase() === keyword.toLowerCase()) {
      var geometry = feature.getGeometry();
      var extent = geometry.getExtent();
      map.getView().fit(extent, { duration: 1000 });

      // Mengatur warna fitur yang dicari
      feature.setStyle(new ol.style.Style({
        stroke: new ol.style.Stroke({
          color: 'rgba(244, 106, 106, 1)',
          width: 2
        }),
        fill: new ol.style.Fill({
          color: 'rgba(244, 106, 106, 0.3)'
        })
      }));

      suggestionsList.style.display = 'none'; // Sembunyikan daftar saran
    } else {
      feature.setStyle(null); // Reset warna dan gaya fitur yang tidak cocok
    }
  });
}

searchInput.addEventListener('input', function () {
  var keyword = this.value.toLowerCase();
  var suggestions = [];

  if (keyword.trim() !== '') {
    batasSource.forEachFeature(function (feature) {
      var name = feature.get('KAL_KEL');
      if (name && name.toLowerCase().indexOf(keyword) !== -1) {
        suggestions.push(name);
      }
    });
  }

  showSuggestions(suggestions, keyword);
});

function showSuggestions(suggestions, keyword) {
  suggestionsList.innerHTML = '';

  if (suggestions.length > 0 && keyword.trim() !== '') {
    suggestions.forEach(function (suggestion) {
      var li = document.createElement('li');
      li.textContent = suggestion;
      suggestionsList.appendChild(li);

      li.addEventListener('click', function () {
        searchFeature(this.textContent);
      });
    });

    suggestionsList.style.display = 'block'; // Tampilkan daftar saran
  } else {
    suggestionsList.style.display = 'none'; // Sembunyikan daftar saran
  }
}

var searchButton = document.getElementById('searchButton');
searchButton.textContent = 'Cari';
searchButton.addEventListener('click', function () {
  var keyword = searchInput.value.toLowerCase();
  if (keyword.trim() !== '') {
    searchFeature(keyword);
  }
});

var zone1Coordinates = [
  // Koordinat fitur poligon zona 1 (fitur 1)
  [
    [110.341833135414376, -7.741239649475161], [110.346992521017214, -7.736248977361433], [110.357663846681163, -7.730954434279802], [110.36374005047395, -7.730933643746639], [110.378644942215431, -7.731988600782509], [110.394196195527272, -7.737017494180793], [110.400797542303692, -7.740712182856848], [110.405875032896915, -7.745905671577038], [110.409519360822756, -7.752681455116439], [110.407758618116986, -7.771060725571795], [110.401934574839487, -7.781952745837966], [110.395132658600829, -7.787490111991047], [110.383968117837341, -7.788222099453145], [110.373690294136509, -7.78655873462003], [110.368559123509044, -7.78502906280938], [110.368588534454332, -7.781707104178157], [110.368000315548002, -7.779812993175597], [110.36733121654207, -7.778734803091598], [110.364320092933909, -7.776487312766721], [110.360003356705789, -7.775845756703327], [110.355998823282377, -7.776017821957104], [110.351995033929171, -7.778074595158758], [110.350478744875517, -7.780949460803854], [110.350420895226051, -7.781274586547092], [110.348794211227641, -7.780478268579971], [110.3470744160267, -7.779484289097767], [110.342547012675922, -7.775578295292987], [110.33863923004121, -7.769153862921163], [110.337451752402472, -7.762662350702997], [110.336755644821153, -7.754791257663157], [110.338229754993364, -7.747893787032087], [110.341833135414376, -7.741239649475161]
  ], [
    [110.335731957201503, -7.814956739226425], [110.338379598405339, -7.813089302017432], [110.345160057979058, -7.80943680070343], [110.350457703609536, -7.808138858539597], [110.355617089212387, -7.807773747620931], [110.360479605405416, -7.808716950174976], [110.366716121034202, -7.81223326852873], [110.365211416217804, -7.811789778308488], [110.363430393581197, -7.811841096897182], [110.361514355408914, -7.812327843653537], [110.359873504597957, -7.813247725924342], [110.35861969296144, -7.815910701196093], [110.358665758904323, -7.8191966239411], [110.359159618716319, -7.821991528617355], [110.36022762402699, -7.823610927611852], [110.362253541521937, -7.824343232611478], [110.364912202046526, -7.823919147206404], [110.366704265937415, -7.822767753689763], [110.367959562880927, -7.817838902054677], [110.367756371474385, -7.813439891920233], [110.366716121034202, -7.81223326852873], [110.375536942240046, -7.82243411027211], [110.376763630932388, -7.83133734521779], [110.376559889187831, -7.835797376023897], [110.375727606921927, -7.839878853940107], [110.373950435698802, -7.84497879647266], [110.368191641792038, -7.852733818936009], [110.356570504162747, -7.857511769866925], [110.346992521017171, -7.858604760070661], [110.340747389580088, -7.857458072016475], [110.336248331840395, -7.853357779970013], [110.329753621502988, -7.845786671171281], [110.327419613730285, -7.838890700334143], [110.326641611139408, -7.830858778492066], [110.328525196359479, -7.823070100331472], [110.331719101732659, -7.819337973818071], [110.335731957201503, -7.814956739226425]
  ], [
    [110.36733121654207, -7.778734803091598], [110.368000315548002, -7.779812993175597], [110.368588534454332, -7.781707104178157], [110.368559123509044, -7.78502906280938], [110.367561773708431, -7.788015070425713], [110.366816524998953, -7.789545718705772], [110.365801847385555, -7.791585482824601], [110.364206303602117, -7.793275565567302], [110.360706401109411, -7.793916629650436], [110.356147704585297, -7.793712654821382], [110.3531992573173, -7.792772912360942], [110.352030172240958, -7.791337797711576], [110.351030200100155, -7.789341741747492], [110.350130061792498, -7.786220977243311], [110.350122614312355, -7.782950976519932], [110.350478744875517, -7.780949460803854], [110.351995033929171, -7.778074595158758], [110.355998823282377, -7.776017821957104], [110.360003356705789, -7.775845756703327], [110.364320092933909, -7.776487312766721], [110.36733121654207, -7.778734803091598]
  ], [
    [110.128069245905309, -7.889755932584547], [110.123032702816815, -7.880508172781693], [110.122787017788099, -7.865540965962821], [110.128177878960855, -7.858119206451661], [110.141213394941175, -7.852033510734283], [110.149935213460282, -7.851729283709962], [110.157919976893311, -7.854102248591292], [110.163754996325082, -7.859456581074426], [110.167010322955434, -7.866088556225637], [110.167931641813098, -7.871016836048099], [110.164369208896844, -7.886348887235685], [110.160561090951887, -7.893041271153131], [110.154216455693472, -7.897121846948289], [110.147827793703158, -7.898013124051467], [110.138469753604639, -7.897656613440989], [110.133610771245827, -7.895339286972694], [110.128069245905309, -7.889755932584547]
  ], [
    [110.604513937826184, -7.939276594270786], [110.621511087823876, -7.941282309913156], [110.631696683754782, -7.947605967641731], [110.636357978364742, -7.962670132860262], [110.635278204507259, -7.976036955318555], [110.626302584316633, -7.989871156427932], [110.62056628569853, -7.993613661695433], [110.606124310354261, -7.993613661695433], [110.592829594733544, -7.988735031967545], [110.582814284117347, -7.979505375141373], [110.580467515641445, -7.961966502697751], [110.585541121195263, -7.950773293978475], [110.591479877411643, -7.943822172222184], [110.604513937826184, -7.939276594270786]
  ]
];

var zone2Coordinates = [
  // Koordinat fitur poligon zona 2 (fitur 1)
  [
    [110.364971034836316, -7.796576857944785], [110.365915386665407, -7.797478249084534], [110.366399079065673, -7.79839104825978], [110.366905804437366, -7.800216640635232], [110.366813672551658, -7.803023473368208], [110.365967210851153, -7.805345371571335], [110.364533408378961, -7.806720248702734], [110.362066564491016, -7.807297566643415], [110.360024704219299, -7.806703134077475], [110.359310682104606, -7.805516518348669], [110.358688791875679, -7.803747998270355], [110.358596659989942, -7.801614354412046], [110.358850022675782, -7.799423649925916], [110.360024704219299, -7.797210113948395], [110.361660045191641, -7.796457052647106], [110.363635122492724, -7.796251672057], [110.364971034836316, -7.796576857944785]
  ], [
    [110.362253541521937, -7.824343232611478], [110.36022762402699, -7.823610927611852], [110.359159618716319, -7.821991528617355], [110.358665758904323, -7.8191966239411], [110.35861969296144, -7.815910701196093], [110.359873504597957, -7.813247725924342], [110.361514355408914, -7.812327843653537], [110.363430393581197, -7.811841096897182], [110.365211416217804, -7.811789778308488], [110.366716121034202, -7.81223326852873], [110.367756371474385, -7.813439891920233], [110.367959562880927, -7.817838902054677], [110.366704265937415, -7.822767753689763], [110.364912202046526, -7.823919147206404], [110.362253541521937, -7.824343232611478]
  ], [
    [110.404762749012235, -7.805019802296258], [110.403117769584114, -7.81084731771063], [110.399538394306447, -7.814463001025964], [110.395794908867813, -7.8165724516072], [110.390505905271738, -7.818291374158203], [110.385361260853685, -7.816966148055392], [110.384308503419049, -7.812446566115158], [110.385291077024704, -7.806397202971833], [110.38794066560628, -7.801557304961584], [110.392892754466189, -7.798088683753572], [110.398535832469335, -7.797655104080289], [110.403538872557974, -7.799582872953278], [110.404762749012235, -7.805019802296258]
  ], [
    [110.399982158806395, -7.814014736821088], [110.404030159360772, -7.815645044549297], [110.406827702188281, -7.820771119419547], [110.406067614130663, -7.830126694579965], [110.399618382127116, -7.835968117918124], [110.391142248636669, -7.83678956150327], [110.388332226120838, -7.834051409916716], [110.386796743793013, -7.827993543687205], [110.388519533157492, -7.822041927883681], [110.390505905271738, -7.818291374158203], [110.395794908867813, -7.8165724516072], [110.399982158806395, -7.814014736821088]
  ], [
    [110.332287248361098, -7.752383495370275], [110.337451752402472, -7.762662350702997], [110.337074786519466, -7.773158911702688], [110.335511864362871, -7.783055757969165], [110.330813138188873, -7.790632191810806], [110.322048315929337, -7.792213504092143], [110.311096914635115, -7.789126044187712], [110.304649857533491, -7.783728696144977], [110.30184250437452, -7.776496767141428], [110.302123239690403, -7.766622201255334], [110.305522935546307, -7.756719739798279], [110.315120809649613, -7.749647445109261], [110.322797664127265, -7.749188339307336], [110.332287248361098, -7.752383495370275]
  ], [
    [110.388624808901, -7.639379583508801], [110.395783559456362, -7.636110208427192], [110.404869737294305, -7.634927777584514], [110.415154296253178, -7.639657827041361], [110.422922223392021, -7.647945209260597], [110.424839664651614, -7.65788238339589], [110.423435988072129, -7.666924813007903], [110.42055845108419, -7.672976177845848], [110.414873560937309, -7.679653446013876], [110.399573486220973, -7.681322746664077], [110.389685413192893, -7.678249648376763], [110.381746793661563, -7.670054840049575], [110.380343117082077, -7.659064865870898], [110.381071081873841, -7.652135379461256], [110.384203227675656, -7.645083539692171], [110.388624808901, -7.639379583508801]
  ], [
    [110.297277131770301, -7.898604232805678], [110.304755133277055, -7.897024141405852], [110.315288915437421, -7.897691653665744], [110.324897892192595, -7.905296730012436], [110.325318995166455, -7.914750913900025], [110.32391531858697, -7.920590154445285], [110.320686862454153, -7.925178071080021], [110.312826273609048, -7.930878138685025], [110.302862117770303, -7.930774610936196], [110.294999581049652, -7.928097627767548], [110.290788551311195, -7.923092660765971], [110.289384874731695, -7.917322970529416], [110.288823404099901, -7.909954332985609], [110.288893587928868, -7.90752126336602], [110.291771124916806, -7.902377011786336], [110.297277131770301, -7.898604232805678]
  ], [
    [110.212285467151773, -7.74430426818447], [110.214729984932831, -7.74796424495652], [110.216645082301056, -7.752663072071591], [110.218104204105458, -7.759440134156878], [110.217444852754639, -7.766213676747241], [110.216385336068356, -7.771508279180815], [110.211087752636828, -7.774851603653055], [110.203947531490016, -7.775433544781782], [110.197797728115191, -7.772911794062507], [110.193271749226994, -7.767799782323773], [110.1911642323401, -7.763189789813621], [110.18992491425854, -7.755102826999318], [110.191279397197306, -7.748640595833103], [110.196992535498481, -7.743762364764453], [110.20238128943204, -7.742706662535701], [110.207662363692933, -7.74312982003087], [110.212285467151773, -7.74430426818447]
  ], [
    [110.583077919071386, -7.925406542273237], [110.58776359373158, -7.933708375375266], [110.588360147188638, -7.940919069435908], [110.585541121195263, -7.950773293978475], [110.574847470609669, -7.957890927991286], [110.562593742606197, -7.958546238202017], [110.552653475313917, -7.950237011414346], [110.548589883166514, -7.944903565226753], [110.547392168651569, -7.935778708612482], [110.550191207269023, -7.926934152153525], [110.555714748999094, -7.919566380488829], [110.563238853003313, -7.916767940283129], [110.577083498235254, -7.919889756849784], [110.583077919071386, -7.925406542273237]
  ]
];

// Proyeksikan koordinat zona
var transformedZone1Coordinates = zone1Coordinates.map(function (featureCoordinates) {
  return featureCoordinates.map(function (coord) {
    return ol.proj.fromLonLat(coord);
  });
});

var transformedZone2Coordinates = zone2Coordinates.map(function (featureCoordinates) {
  return featureCoordinates.map(function (coord) {
    return ol.proj.fromLonLat(coord);
  });
});

// Buat objek poligon untuk setiap fitur zona
var zone1Polygons = transformedZone1Coordinates.map(function (featureCoordinates) {
  return new ol.geom.Polygon([featureCoordinates]);
});

var zone2Polygons = transformedZone2Coordinates.map(function (featureCoordinates) {
  return new ol.geom.Polygon([featureCoordinates]);
});

// Tambahkan fitur zona 1 ke layer
var zone1Features = zone1Polygons.map(function (polygon) {
  return new ol.Feature(polygon);
});

var zone1Layer = new ol.layer.Vector({
  source: new ol.source.Vector({
    features: zone1Features
  }),
  style: new ol.style.Style({
    stroke: new ol.style.Stroke({
      color: 'rgba(255, 0, 0, 1)',
      width: 2
    })
  })
});
// map.addLayer(zone1Layer);

// Tambahkan fitur zona 2 ke layer
var zone2Features = zone2Polygons.map(function (polygon) {
  return new ol.Feature(polygon);
});

var zone2Layer = new ol.layer.Vector({
  source: new ol.source.Vector({
    features: zone2Features
  }),
  style: new ol.style.Style({
    stroke: new ol.style.Stroke({
      color: 'rgba(0, 0, 255, 1)',
      width: 2
    })
  })
});
// map.addLayer(zone2Layer);

// Fungsi untuk memeriksa apakah posisi pengguna berada di zona 1
function checkIfInZone1(coordinate) {
  var point = new ol.geom.Point(ol.proj.fromLonLat(coordinate));
  for (var i = 0; i < zone1Features.length; i++) {
    if (zone1Features[i].getGeometry().intersectsCoordinate(point.getCoordinates())) {
      return true;
    }
  }
  return false;
}

// Fungsi untuk memeriksa apakah posisi pengguna berada di zona 2
function checkIfInZone2(coordinate) {
  var point = new ol.geom.Point(ol.proj.fromLonLat(coordinate));
  for (var i = 0; i < zone2Features.length; i++) {
    if (zone2Features[i].getGeometry().intersectsCoordinate(point.getCoordinates())) {
      return true;
    }
  }
  return false;
}

// Dapatkan lokasi pengguna saat halaman dimuat
navigator.geolocation.getCurrentPosition(function (position) {
  var userCoordinate = [position.coords.longitude, position.coords.latitude];
  var isInZone1 = checkIfInZone1(userCoordinate);
  var isInZone2 = checkIfInZone2(userCoordinate);

  // Tampilkan peta terlebih dahulu sebelum alert muncul
  window.setTimeout(function () {
    if (isInZone1) {
      alert('Anda memasuki zona 1 kejahatan jalanan! Hubungi pihak keamanan jika membutuhkan bantuan');
    } else if (isInZone2) {
      alert('Anda memasuki zona 2 kejahatan jalanan! Hubungi pihak keamanan jika membutuhkan bantuan');
    } else {
      alert('Anda berada diluar zona rawan kejahatan jalanan! Tetaplah waspada');
    }
  }, 1000);
});

//chart
var chart = null;
function getDataByYearAndCity(year, city) {
  var data = {
    2020: {
      Kota: 12,
      Sleman: 15,
      Bantul: 4,
      'Kulon Progo': 2,
      'Gunung Kidul': 3
    },
    2021: {
      Kota: 16,
      Sleman: 15,
      Bantul: 7,
      'Kulon Progo': 2,
      'Gunung Kidul': 1
    },
    2022: {
      Kota: 34,
      Sleman: 30,
      Bantul: 6,
      'Kulon Progo': 8,
      'Gunung Kidul': 6
    },
    2023: {
      Kota: 7,
      Sleman: 20,
      Bantul: 6,
      'Kulon Progo': 1,
      'Gunung Kidul': 2
    }
  };
  return data[year][city];
}

function createChart() {
  var yearSelect = document.getElementById('yearSelect');
  var selectedYear = yearSelect.value;

  var data = {
    labels: ['Kota', 'Sleman', 'Bantul', 'Kulon Progo', 'Gunung Kidul'],
    datasets: [
      {
        label: 'Total Kejahatan Jalanan',
        data: [
          getDataByYearAndCity(selectedYear, 'Kota'),
          getDataByYearAndCity(selectedYear, 'Sleman'),
          getDataByYearAndCity(selectedYear, 'Bantul'),
          getDataByYearAndCity(selectedYear, 'Kulon Progo'),
          getDataByYearAndCity(selectedYear, 'Gunung Kidul')
        ],
        backgroundColor: '#025464',
        borderColor: '#025464',
        borderWidth: 1
      }
    ]
  };

  var chartCanvas = document.getElementById('chart');
  chart = new Chart(chartCanvas, {
    type: 'bar',
    data: data,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            font: {
              size: 12
            },
          }
        }
      }
    }
  });
}

function updateChart() {
  var yearSelect = document.getElementById('yearSelect');
  var selectedYear = yearSelect.value;

  var newData = [
    getDataByYearAndCity(selectedYear, 'Kota'),
    getDataByYearAndCity(selectedYear, 'Sleman'),
    getDataByYearAndCity(selectedYear, 'Bantul'),
    getDataByYearAndCity(selectedYear, 'Kulon Progo'),
    getDataByYearAndCity(selectedYear, 'Gunung Kidul')
  ];

  chart.data.datasets[0].data = newData;
  chart.update();
}

function toggleChart() {
  var chartContainer = document.getElementById('chartContainer');
  if (chartContainer.style.display === 'none') {
    chartContainer.style.display = 'block';
    if (chart === null) {
      createChart();
    }
  } else {
    chartContainer.style.display = 'none';
  }
}

document.addEventListener('DOMContentLoaded', function () {
  createChart();
});

document.getElementById('toggleChartButton').addEventListener('click', toggleChart);

// Layer Rumah Sakit
// Buat sumber vektor dari GeoJSON
var rsSource = new ol.source.Vector({
  url: 'data/rumahsakit.geojson',
  format: new ol.format.GeoJSON(),
});

// Buat layer vektor
var rsLayer = new ol.layer.Vector({
  title: 'Rumah Sakit',
  source: rsSource,
  visible: false
});
map.addLayer(rsLayer);

// Layer Kantor Polisi
// Buat sumber vektor dari GeoJSON
var polisiSource = new ol.source.Vector({
  url: 'data/polisi.geojson',
  format: new ol.format.GeoJSON(),
});

// Buat layer vektor
var polisiLayer = new ol.layer.Vector({
  title: 'Kantor Polisi',
  source: polisiSource,
  visible: false
});
map.addLayer(polisiLayer);

// Legenda Peta
var legendList = document.getElementById('legend-list');

function addLegendItem(color, label) {
  var legendItem = document.createElement('li');
  legendItem.classList.add('legend-item');

  var colorBox = document.createElement('span');
  colorBox.style.backgroundColor = color;
  legendItem.appendChild(colorBox);

  var legendLabel = document.createElement('span');
  legendLabel.textContent = label;
  legendItem.appendChild(legendLabel);

  legendList.appendChild(legendItem);
}

// Add legend items
addLegendItem('rgba(5, 88, 139, 0.4)', 'BatasAdministrasi');
addLegendItem('yellow', 'FiturTerpilih');
addLegendItem('rgba(200, 0, 0, 1)', 'Klitih2020');
addLegendItem('rgba(0, 200, 0, 1)', 'Klitih2021');
addLegendItem('rgba(0, 0, 200, 1)', 'Klitih2022');
addLegendItem('rgba(0, 0, 0, 1)', 'Klitih2023');

function toggleLegend() {
  var legend = document.getElementById('legend');
  legend.classList.toggle('hidden');
}

var toggleLegendButton = document.getElementById("toggleLegendButton");
var mapLegend = document.getElementById("map-legend");

toggleLegendButton.addEventListener("click", function() {
  if (mapLegend.style.display === "none") {
    mapLegend.style.display = "block";
    toggleLegendButton.textContent = "Sembunyikan Legenda";
  } else {
    mapLegend.style.display = "none";
    toggleLegendButton.textContent = "Tampilkan Legenda";
  }
});

// KUMPULAN BUTTON
// LAYER SWITCHER
var layerSwitcher = new ol.control.LayerSwitcher({
  activationMode: 'click',
  startActive: false,
  groupSelectStyle: 'children'
});
map.addControl(layerSwitcher);

// Full screen control
var fsButton = document.createElement('button');
fsButton.innerHTML = '<img src="assets/images/fullscreen.svg" alt="" style="width:20px;height:20px;filter:brightness(0) invert(1);vertical-align:middle"></img>';
fsButton.className = 'myButton';
fsButton.style.border = 'none'; /* Tambahkan ini untuk menghilangkan border */

var fsElement = document.createElement('div');
fsElement.className = 'fsButtonDiv';
fsElement.appendChild(fsButton);

var fsControl = new ol.control.Control({
  element: fsElement
});

fsButton.addEventListener("click", () => {
  var mapEle = document.getElementById("map");
  if (mapEle.requestFullscreen) {
    mapEle.requestFullscreen();
    fsButton.style.display = 'none';
    var exitFsButton = document.createElement('button');
    exitFsButton.innerHTML = '<img src="assets/images/exitfullscreen.svg" alt="" style="width:20px;height:20px;filter:brightness(0) invert(1);vertical-align:middle"></img>';
    exitFsButton.className = 'myButton';
    fsElement.replaceChild(exitFsButton, fsButton);

    exitFsButton.addEventListener("click", () => {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.msExitFullscreen) {
        document.msExitFullscreen();
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      }

      fsElement.replaceChild(fsButton, exitFsButton);
    });
  }
});

document.addEventListener("fullscreenchange", function () {
  if (!document.fullscreenElement) {
    fsButton.style.display = 'block';
  }
});
map.addControl(fsControl);

// HOME
// map.addControl(homeControl);
var homeButton = document.getElementById('homeButton');
homeButton.addEventListener('click', () => {
  location.href = "peta.html";
});
