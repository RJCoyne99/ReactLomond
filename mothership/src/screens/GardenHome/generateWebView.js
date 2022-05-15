import { StyleSheet, Text, View } from "react-native";
import { WebView } from "react-native-web-webview";
import React from "react";

const generate = (props) => {
  // console.log(props.lead);
  // console.log(props.lead.id);
  // console.log(props.lead.name_value_list.rep_name_c.value);
  // console.log(props.lead.name_value_list.name.value);
  // console.log(props.lead.name_value_list.phone_home.value);
  // console.log(props.lead.name_value_list.primary_address_street.value);
  // console.log(props.lead.name_value_list.name.value);

  const onMessage = (payload) => {
    // console.log("payload", payload);
  };
  const url = "https://lomondcrm.co.uk/app/app/garden/pixie/index.html";
  // +
  // props.lead.id +
  // "&rep_name=" +
  // props.lead.name_value_list.rep_name_c.value +
  // "&name=" +
  // props.lead.name_value_list.name.value +
  // "&phone=" +
  // props.lead.name_value_list.phone_home.value +
  // "&address=" +
  // props.lead.name_value_list.primary_address_street.value +
  // "&postcode=" +
  // props.lead.name_value_list.primary_address_postalcode.value +
  // "&appointment_time=" +
  // props.lead.name_value_list.appointmenttime_c.value;

  const leadInfoFull = props.lead.name_value_list.name.value;
  const leadInfoFirstName = leadInfoFull.split(" ")[0];
  const leadInfoLastName = leadInfoFull.split(" ")[1];
  return (
    <View style={{ width: "100%", height: "100%" }}>
      <Text>J{props.lead.id}</Text>
      {/* <View style={{ width: 900 }}>
     
{/*  */}
      <View style={styles.container}>
        {/* <WebView
          source={{ uri: "https://www.youtube.com/embed/MhkGQAoc7bc" }}
          style={styles.video}
        />
        <WebView
          source={{ uri: "https://www.youtube.com/embed/PGUMRVowdv8" }}
          style={styles.video}
        /> */}
        <WebView
          source={{
            uri: url,
          }}
          javaScriptEnabled={true}
          domStorageEnabled={true}
          injectedJavaScriptBeforeContentLoaded={(function () {
            window.localStorage.setItem("leadInfoId", props.lead.id + "dsa");
            window.localStorage.setItem("leadInfoFirstName", leadInfoFirstName);
            window.localStorage.setItem("leadInfoLastName", leadInfoLastName);
            window.localStorage.setItem(
              "leadInfoPhone",
              props.lead.name_value_list.phone_home.value
            );
            window.localStorage.setItem(
              "leadInfoRep",
              props.lead.name_value_list.rep_name_c.value
            );
            window.localStorage.setItem(
              "leadInfoAddress",
              props.lead.name_value_list.primary_address_street.value
            );
            window.localStorage.setItem(
              "leadInfoPostCode",
              props.lead.name_value_list.primary_address_postalcode.value
            );

            const tokenLocalStorage = window.localStorage.setItem(
              "lead",
              props.lead
            );

            // JOB REQUIREMENTS
            window.localStorage.setItem(
              "gardenHomeSize",
              props.contract.gardenHomeSize
            );
            window.localStorage.setItem(
              "numberOfWindows",
              props.contract.numberOfWindows
            );
            window.localStorage.setItem(
              "typeOfWindows",
              props.contract.typeOfWindows
            );
            window.localStorage.setItem(
              "typeOfDoors",
              props.contract.typeOfDoors
            );
            window.localStorage.setItem(
              "typeOfCladding",
              props.contract.typeOfCladding
            );
            window.localStorage.setItem(
              "directionOfCladding",
              props.contract.directionOfCladding
            );
            window.localStorage.setItem(
              "compositeDecking",
              props.contract.compositeDecking
            );
            window.localStorage.setItem("skylight", props.contract.skylight);
            window.localStorage.setItem(
              "waterAndWasteConnection",
              props.contract.waterAndWasteConnection
            );
            window.localStorage.setItem(
              "glassOrPlasterboardInternalWall",
              props.contract.glassOrPlasterboardInternalWall
            );
            window.localStorage.setItem(
              "hardLandscaping",
              props.contract.hardLandscaping
            );
            window.localStorage.setItem(
              "catSixConnection",
              props.contract.catSixConnection
            );
            window.localStorage.setItem(
              "additionalOverhangs",
              props.contract.additionalOverhangs
            );
            window.localStorage.setItem(
              "artificialGrass",
              props.contract.artificialGrass
            );

            var leadInfoId = window.localStorage.getItem("leadInfoId");
            console.log("LEAD ID:" + leadInfoId);
            // window.ReactNativeWebView.postMessage(tokenLocalStorage);
            // window.ReactNativeWebView.postMessage(lead);
          })()}
          // onMessage={onMessage}
          onError={(syntheticEvent) => {
            const { nativeEvent } = syntheticEvent;
            console.warn("WebView error: ", nativeEvent);
          }}
        />
      </View>
    </View>
  );
};

export default generate;

const styles = StyleSheet.create({
  container: {
    flex: 1,
    alignItems: "center",
    justifyContent: "space-between",
  },
  video: {
    marginTop: 20,
    maxHeight: 200,
    width: 320,
    flex: 1,
  },
});
