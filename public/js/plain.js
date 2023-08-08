function createUniqueArrayOfJSONObjects(jsonObjects) {
    // Step 1: Convert JSON objects to strings
    const jsonStringArray = jsonObjects.map(obj => JSON.stringify(obj));

    // Step 2: Use a Set to store the unique strings
    const uniqueJsonStringsSet = new Set(jsonStringArray);

    // Step 3: Convert the unique strings back to JSON objects
    const uniqueJsonObjects = Array.from(uniqueJsonStringsSet).map(jsonString => JSON.parse(jsonString));

    return uniqueJsonObjects;
}
