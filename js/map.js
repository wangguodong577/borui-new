
        if ($stateParams.cityId == 1) {
            $scope.lng = 116.403119;
            $scope.lat = 39.914714;
        } else if ($stateParams.cityId == 2) {
            $scope.lng = 104.072653;
            $scope.lat = 30.664043;
        }

        $scope.mapOptions = {
            ngCenter: {
                lng: $scope.lng,
                lat: $scope.lat
            },
            ngZoom: 12,
            scrollzoom: true
        };

        /*添加marker事件*/
        $scope.addMarker = function (restaurant) {
            if (restaurant.address.wgs84Point) {

                var lon = 39.91172;
                var lat = 116.46742;
                var name = 'Brain';

                // 自定义覆盖物标签
                var ComplexCustomOverlay = function(point, text){
                    this._point = point;
                    this._text = text;
                }
                ComplexCustomOverlay.prototype = new BMap.Overlay();
                ComplexCustomOverlay.prototype.initialize = function(map){
                    this._map = map;
                    var div = this._div = document.createElement("div");
                    div.style.position = "absolute";
                    div.style.zIndex = BMap.Overlay.getZIndex(this._point.lat);
                    div.style.backgroundColor = "white";
                    div.style.border = "1px solid red";
                    div.style.color = "red";
                    div.style.height = "20px";
                    div.style.padding = "0px";
                    div.style.lineHeight = "20px";
                    div.style.whiteSpace = "nowrap";
                    div.style.fontSize = "12px"
                    var span = this._span = document.createElement("span");
                    div.appendChild(span);
                    span.appendChild(document.createTextNode(this._text));

                    var arrow = this._arrow = document.createElement("div");
                    arrow.style.position = "absolute";
                    arrow.style.width = "11px";
                    arrow.style.height = "10px";
                    arrow.style.top = "22px";
                    arrow.style.left = "10px";
                    arrow.style.overflow = "hidden";
                    div.appendChild(arrow);

                    $scope.myMap.getPanes().labelPane.appendChild(div);

                    return div;
                }

                ComplexCustomOverlay.prototype.draw = function(){
                    var map = this._map;
                    var pixel = map.pointToOverlayPixel(this._point);
                    this._div.style.left = pixel.x + 10 + "px";
                    this._div.style.top  = pixel.y - 22 + "px";
                }

                var point = new BMap.Point(lon, lat);
                var marker = new BMap.Marker(point);

                $scope.myMap.addOverlay(marker);

                //创建信息窗口
                var opts = {
                    width: 200,
                    height: 70,
                    title: "<font style='font-weight:bold;'>[" + name + "]</font>",
                    enableMessage: false
                };
                var infoWindow = new BMap.InfoWindow("地址：" + restaurant.address.address, opts);

                //添加单击事件
                marker.addEventListener("click", function () {
                    $scope.myMap.openInfoWindow(infoWindow, point);
                });
            }
        };

        $scope.$watch('myMap', function (map) {
            if (map) {
                $http({
                    url: '/admin/api/restaurant/delivery',
                    params: {
                        cityId: $stateParams.cityId,
                        organizationId: $stateParams.organizationId,
                        startOrderDate:$stateParams.startOrderDate,
                        endOrderDate:$stateParams.endOrderDate
                    },
                    method: 'GET'
                }).success(function (data) {
                    var restaurants = data.content;
                    for (var i = 0; i < restaurants.length; i++) {
                        $scope.addMarker(restaurants[i]);
                    }
                })
            }
        });
