<!-- amCharts javascript code -->
<!-- amCharts javascript code -->
<script type="text/javascript">
    AmCharts.makeChart("tourismnumbers",
        {
            "type": "pie",
            "angle": 9,
            "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
            "depth3D": 4,
            "labelText": "[[title]] [[percents]]%",
            "colors": [
                "#0fb6b8",
                "#f9b521",
                "#25d64a",
                "#2f4074",
                "#ff6161",
                "#2f4074",
                "#448e4d",
                "#b7b83f",
                "#b9783f",
                "#b93e3d",
                "#913167"
            ],
            "marginLeft": 0,
            "maxLabelWidth": 150,
            "outlineThickness": 0,
            "pullOutOnlyOne": true,
            "titleField": "category",
            "valueField": "column-1",
            "addClassNames": true,
            "autoResize": false,
            "creditsPosition": "bottom-right",
            "fontFamily": "",
            "fontSize": 12,
            "labelsEnabled": false,
            "handDrawn": true,
            "processCount": 999,
            "theme": "light",
            "allLabels": [],
            "balloon": {},
            "titles": [],
            "dataProvider": [
                {
                    "category": "Brisbane",
                    "column-1": "1215000"
                },
                {
                    "category": "Gold Coast",
                    "column-1": "1056000"
                },
                {
                    "category": "Sunshine Coast",
                    "column-1": "296000"
                },
                {
                    "category": "Tropical North QLD",
                    "column-1": "898000"
                },
                {
                    "category": "Whitsundays",
                    "column-1": "241000"
                },
                {
                    "category": "Other",
                    "column-1": "1,088,000"
                }
            ]
        }
    );
</script>

<div id="tourismnumbers" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>


