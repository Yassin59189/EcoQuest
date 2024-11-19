<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>

</head>
<body>
    <?php
    include "conn.php";
    $eventID = $_GET["eventID"];
    $req = "select * from evenements where IDevent = '$eventID'";
    $res = mysqli_query($conn, $req);
    if($row = mysqli_fetch_assoc($res)) {
        $eventName = $row['Nom'];
        $eventDate = $row['Date'];
        $eventStartTime = $row['startTime'];
        $eventEndTime = $row['endTime'];
        $eventDescription = $row['Description'];
        $eventLocation = $row['Location'];
    }
    ?>
    <!-- Edit modal -->
    <div id="editModalBackdrop"
                    class=" my-8 w-100 fixed inset-0 flex items-center justify-center">
                    <!-- Modal -->
                    <div class="bg-white rounded-lg shadow-lg w-1/3 p-6">
                        <h2 class="text-lg font-semibold mb-4">Edit Event</h2>
                        <form id="eventForm" action="editEventAction.php?eventID=<?php echo($eventID) ?>" method="post">  
                            <!-- Event Name -->
                            <div class="mb-4">
                                <label for="eventName" class="block text-sm font-medium text-gray-700">Event
                                    Name</label>
                                <input type="text" id="editEventName" name="eventName" value="<?php echo($eventName) ?>"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                    required>
                            </div>

                            <!-- Event Date -->
                            <div class="mb-4">
                                <label for="eventDate" class="block text-sm font-medium text-gray-700">Event
                                    Date</label>
                                <input type="date" id="editEventDate" name="eventDate" value="<?php echo($eventDate) ?>"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                    required>
                            </div>
                            <!-- Start and End Time -->
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700">Event Time</label>
                                <div class="flex gap-4 mt-2">
                                    <div class="w-1/2">
                                        <label for="startTime" class="sr-only">Starting Time</label>
                                        <input type="time" id="editStartTime" name="startTime" value="<?php echo($eventStartTime) ?>"
                                            class="p-2 border border-gray-300 rounded-md w-full focus:ring-blue-500 focus:border-blue-500"
                                            required>
                                    </div>
                                    <div class="w-1/2">
                                        <label for="endTime" class="sr-only">Ending Time</label>
                                        <input type="time" id="editEndTime" name="endTime" value="<?php echo($eventEndTime) ?>"
                                            class="p-2 border border-gray-300 rounded-md w-full focus:ring-blue-500 focus:border-blue-500"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <!-- Event Description -->
                            <div class="mb-4">
                                <label for="eventDescription" class="block text-sm font-medium text-gray-700">Event
                                    Description</label>
                                <textarea id="editEventDescription" name="eventDescription" rows="4"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                    required><?php echo($eventDescription) ?></textarea>
                            </div>

                            <!-- Event Place -->
                            <div class="mb-4">
                                <label for="eventPlace" class="block text-sm font-medium text-gray-700">Event
                                    Location</label>
                                <input type="text" id="editEventPlace" name="eventPlace" value="<?php echo($eventLocation) ?>"
                                    class="mt-1 p-2 block w-full border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                    required>
                            </div>
                            <!-- Event Type -->
                            <div class="mb-4 flex justify-between">
                                <label for="eventPlace" class="block text-sm font-medium text-gray-700">Event
                                    Type</label>
                                <label class="text-sm font-medium text-gray-700"><input type="radio" class="mr-2"
                                        name="eventType" id="type" value="Teams">By teams</label>
                                <label class=" text-sm font-medium text-gray-700" for=""><input type="radio"
                                        class="mr-2" name="eventType" id="type" value="Solo">Individuel</label>
                            </div>

                            <!-- Event Image Upload -->
                            <div class="mb-4">
                                <label for="eventImage" class="block text-sm font-medium text-gray-700">Upload Event
                                    Cover</label>
                                <input type="file" id="eventImage" name="eventImage" accept="image/*"
                                    class="mt-1 block w-full text-sm text-gray-600 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                            </div>

                            <!-- Modal Buttons -->
                            <div class="flex justify-end">
                                <button type="button" id="closeEditModalButton"
                                    class="px-4 py-2 mr-2 bg-gray-300 rounded-md hover:bg-gray-400 focus:outline-none">
                                    Cancel
                                </button>
                                <button type="submit"
                                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>



                <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
    integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>