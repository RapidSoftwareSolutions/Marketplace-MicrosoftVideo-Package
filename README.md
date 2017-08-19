[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/MicrosoftVideo/functions?utm_source=RapidAPIGitHub_MicrosoftVideoFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# MicrosoftVideo Package
Microsoft Video API is a cloud-based API that provides advanced algorithms for tracking faces, detecting motion, and stabilizing video. These APIs allow you to build more personalized and intelligent apps by understanding and automatically transforming your video content.
* Domain: [microsoft.com](https://microsoft.com)
* Credentials: subscriptionKey

## How to get credentials: 
1. Sign in [portal.azure.com](https://portal.azure.com).
2. Add new API subscription.
 
## MicrosoftVideo.getFaceDetection
Detects and tracks human faces in a video and returns face locations.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| url            | File       | Video file link.

## MicrosoftVideo.getOperationResult
Get operation result. If succeeded, this interface returns a JSON that includes time stamps and operation status.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| id             | String     | Operation id.

## MicrosoftVideo.getVideoContent
This interface is used for getting result video content. Currently only Stabilization outputs video content as result..

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| id             | String     | Operation id.

## MicrosoftVideo.detectMotion
Detects motion in a video, and returns the frame and duration of the motion that was captured.

| Field             | Type       | Description
|-------------------|------------|----------
| subscriptionKey   | credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| url               | File       | Video file link.
| sensitivityLevel  | Select     | Specify the detection sensitivity level: 'low', 'medium', 'high'. Higher sensitivity means more motions will be detected at a cost that more false alarms will be reported. The default value is 'medium'.
| frameSamplingValue| Number     | User may skip frames by setting this parameter. It can be used as a tradeoff between performance and cost, skipping frames may reduce processing time but result in worse detection performance. The default value is 1, meaning detecting motion for every frame. If set to 2, then the algorithm will detect one frame for every two frames. The upper bound is 20.
| detectionZones    | String     | User can setup detection zones by passing in a string like ``detectionZones=0,0;0.5,0;1,0;1,0.5;1,1;0.5,1;0,1;0,0.5 |0.3,0.3;0.55,0.3;0.8,0.3; 0.8,0.55;0.8,0.8;0.55,0.8;0.3,0.8;0.3,0.55;| 0,0;1,0;1,1;0,1``, each detection zone is separated by a ``|`` and each point is defined by a “x,y” pair and separated by a “;”. At most 8 detection zones are supported and each detection zone should be defined by at least 3 points and no more than 16 points. The default setting is ``detectionZones=0,0;0.5,0;1,0;1,0.5;1,1;0.5,1;0,1;0,0.5``, i.e. the whole frame defined by an 8-point polygon.
| detectLightChange | Select     | Specify whether light change events should be detected. The default value is false.
| mergeTimeThreshold| Number     | Specify the threshold on whether successive motions should be merged together, if the interval between successive motions is <= mergeTimeThreshold, they will be merged. The default value is 0.0 and upper bound is 10.0.

## MicrosoftVideo.videoStabilizes
Smooths and stabilizes a video.

| Field          | Type       | Description
|----------------|------------|----------
| subscriptionKey| credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| url            | File       | Video file link.

## MicrosoftVideo.generateMotionThumbnail
Generates a motion thumbnail from a video. The Video Thumbnail API provides an automatic summary for videos to let people see a preview or snapshot quickly. Selection of scenes from a video create a preview in form of a short video. 

| Field                           | Type       | Description
|---------------------------------|------------|----------
| subscriptionKey                 | credentials| Subscription key which provides access to this API. Found in your Cognitive Services accounts.
| url                             | File       | Video file link.
| maxMotionThumbnailDurationInSecs| Number     | Specifies maximum duration of output video (in seconds). The default value is 0, which indicates the duration will be automatically decided by the algorithm.
| outputAudio                     | Select     | Indicates whether output video should include audio track. The default value is true.
| fadeInFadeOut                   | Select     | Indicates whether output video should have fade in/out effect during scene changes. The default value is true.

