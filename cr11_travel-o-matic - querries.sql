1. Gastro

SELECT gastro.gastroId, gastrotype.gastroType, gastro.gastroName, gastro.description, gastro.picture, location.location, gastro.address, gastro.phone, gastro.website 
FROM gastro 
INNER JOIN location ON gastro.FK_location = location.locationId 
INNER JOIN gastrotype ON gastro.FK_gastrotype = gastrotype.gastroTypeId 
____________________________________________
2. Places

SELECT places.placeId, placestype.placesType , places.placeName, places.description, places.picture, location.location, places.address, places.website
FROM places 
INNER JOIN location ON places.FK_location = location.locationId 
INNER JOIN placestype ON places.FK_placestype = placestype.placesTypeId 
____________________________________________
3. Events

SELECT evento.eventId, eventtype.eventtype, evento.eventName, evento.description, evento.picture, location.location, evento.address, evento.website, evento.eventDate, evento.eventTime, evento.price
FROM evento 
INNER JOIN location ON evento.FK_location = location.locationId 
INNER JOIN eventtype ON evento.FK_eventtype = eventtype.eventtypeId
_____________________________________________


