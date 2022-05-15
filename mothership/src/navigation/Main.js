import * as React from "react";
import { Text, View, StyleSheet } from "react-native";
// IMPORT CONSTANTS
import Constants from "expo-constants";
import S from "../constants/c1--Styles";
import C from "../constants/c2--Colours";
import O from "../constants/c3--Objects";
import T from "../constants/c4--Text";
import L from "../constants/c5--Links";
import A from "../constants/c6--Actions";
import N from "../constants/c7--Navigation";
import D from "../constants/c8--Data";
// IMPORT PAGES
import Home from "../screens/Home";
import Leads from "../screens/Leads";
import LeadsTwo from "../screens/LeadsTwo";
import Settings from "../screens/Settings";
import Roof from "./Roof";
import Lightbox from "../screens/Roof/lightbox";
import GardenHome from "./Gardenhome";
import GenerateContract from "../screens/GardenHome/generateWebView";

export default class Main extends React.Component {
  state = {
    page: 1,
    product: 4,
    lead: {},
    contract: {
      gardenHomeSize: "",
      numberOfWindows: "2",
      typeOfWindows: "slimline",
      typeOfDoors: "patio",
      typeOfCladding: "",
      directionOfCladding: "vertical",
      compositeDecking: false,
      skylight: true,
      waterAndWasteConnection: false,
      glassOrPlasterboardInternalWall: true,
      hardLandscaping: false,
      catSixConnection: false,
      additionalOverhangs: false,
      artificialGrass: true,
    },
  };

  pickPageToRender = () => {
    if (this.state.page === 8) {
      // console.log(this.state.userInfo)
      return (
        <Home
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          response={this.props.response}
          product={(product) => this.setState({ product: parseInt(product) })}
        />
      );
    }
    // Launch lead selection page
    if (this.state.page === 1) {
      return (
        <LeadsTwo
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={(lead) => this.setState({ lead: lead })}
          product={this.state.product}
          response={this.props.response}
          userName={this.props.userInfo.username}
        />
      );
    }
    //  Enter Garden Home navigation with props
    if (this.state.page === 2) {
      return (
        <GardenHome
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
          contract={this.state.contract}
          setContract={(data) => {
            this.setState({
              contract: {
                ...this.state.contract,
                ...data,
              },
            });
          }}
        />
      );
    }
    if (this.state.page === 3) {
      return (
        <Settings
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          response={this.props.response}
          contract={this.props.contract}
          userName={this.props.userInfo.username}
        />
      );
    }
    // if (this.state.page === 4) {
    //   return (
    //     <Roof
    //       pageChange={(pageNum) => this.setState({ page: pageNum })}
    //       lead={this.state.lead}
    //     />
    //   );
    // }s

    if (this.state.page === 4) {
      return (
        <GenerateContract
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
          contract={this.state.contract}
          userName={this.props.userInfo.username}
        />
      );
    }
  };
  render() {
    return (
      <View style={[S.container, { paddingTop: Constants.statusBarHeight }]}>
        {this.pickPageToRender()}
      </View>
    );
  }
}
