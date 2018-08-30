/**
 * The "old" marker style used by L.StyleEditor
 * used the mapbox API v3
 */
L.StyleEditor.marker.DefaultMarker = L.StyleEditor.marker.Marker.extend({

  createMarkerIcon: function (iconOptions, iconClass) {
    if (!iconClass) {
      iconClass = ''
    }

    let iconSize = iconOptions.iconSize
    return new L.Icon({
      iconUrl: this._getMarkerUrlForStyle(iconOptions),
      iconSize: iconOptions.iconSize,
      iconColor: iconOptions.iconColor,
      icon: iconOptions.icon,
      className: iconClass,
      iconAnchor: [iconSize[0] / 2, iconSize[1] / 2],
      popupAnchor: [0, -iconSize[1] / 2]
    })
  },

  createSelectHTML: function (parentUiElement, iconOptions, icon) {
    let tmpOptions = {}
    tmpOptions.iconSize = this.options.size.small
    tmpOptions.icon = icon
    tmpOptions.iconColor = iconOptions.iconColor

    parentUiElement.innerHTML = this.createMarkerIcon(tmpOptions, this.options.selectIconClass).createIcon().outerHTML
  },

  _getMarkerUrlForStyle: function (iconOptions) {
    return this._getMarkerUrl(iconOptions.iconSize, iconOptions.iconColor, iconOptions.icon)
  },

  _getMarkerUrl: function (size, color, icon) {
    size = this.sizeToName(size)[0]
    if (color.indexOf('#') === 0) {
      color = color.replace('#', '')
    } else {
      color = this.options.styleEditorOptions.util.rgbToHex(color, true)
    }
    let url = 'https://safety.projectxplor.nl/kaart/Icons/pin-' + size
    if (icon) {
      url += '-' + icon
    }
    return url + '+' + color + '.png'
  },

  options: {
    selectIconClass: 'defaultmarker',
    markers: [
      'circle-stroked',
      'pitch' 
    ]
  }
})
