import * as React from "react";
import { Text, View, StyleSheet } from "react-native";
import S from "../constants/c1--Styles";
import C from "../constants/c2--Colours";
import O from "../constants/c3--Objects";
import T from "../constants/c4--Text";
import L from "../constants/c5--Links";
import A from "../constants/c6--Actions";
import N from "../constants/c7--Navigation";
import D from "../constants/c8--Data";
// IMPORT PAGES FROM ROOFING SECTION
import CompanyOverview from "../screens/GardenHome/CompanyOverview";
// import Roofing from '../screens/Roof/Roofing';
// import RoofingProblems from '../screens/Roof/RoofingProblems';
import RoofingInstallation from "../screens/Roof/RoofingInstallation";
import ProductGuarantee from "../screens/GardenHome/ProductGuarantee";
// import ReasonsForChange from '../screens/Roof/ReasonsForChange';
import Showhome from "../screens/Showhome";
import Marketplace from "../screens/Roof/market";
import Marketplace2 from "../screens/Roof/market2";
import Marketplace3 from "../screens/Roof/market3";
import Marketplace4 from "../screens/Roof/market4";
import Marketplace5 from "../screens/Roof/market5";
import MarketplaceVideo from "../screens/Roof/marketVideo";

import GardenHome from "../screens/GardenHome/home";
import GardenHome2 from "../screens/GardenHome/size";
import GardenHome3 from "../screens/GardenHome/colour";
import GardenHome4 from "../screens/GardenHome/doors";
import GardenHome5 from "../screens/GardenHome/windows";
import GardenHome6 from "../screens/GardenHome/windows2";
import GardenHome7 from "../screens/GardenHome/options";
import GardenHome8 from "../screens/GardenHome/generateWebView";

export default class Gardenhome extends React.Component {
  state = {
    page: 1,
    lead: this.props.lead,
    userName: this.props.userName,
    closeStatus1: false,
    closeStatus2: false,
    closeStatus3: false,
    closeStatus4: false,
    closeStatus5: false,
    closeStatus6: false,
    closeStatus7: false,
    reasons: "",
    showhome: "",
    customer: "",
  };
  pickPageToRender = () => {
    if (this.state.page === 0) {
      return this.props.pageChange(1);
    }
    // Garden Home - proceed
    if (this.state.page === 1) {
      return (
        <GardenHome
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
        />
      );
    }

    if (this.state.page === 2) {
      return (
        <CompanyOverview
          home={(num) => this.props.pageChange(num)}
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
        />
      );
    }

    if (this.state.page === 3) {
      return (
        <ProductGuarantee
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
          setClose={() =>
            this.setState({ closeStatus1: !this.state.closeStatus1 })
          }
          closeStatus={this.state.closeStatus1}
        />
      );
    }
    if (this.state.page === 4) {
      return (
        <Showhome
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
          setShowhome={(data) => this.setState({ showhome: data })}
          setCustomer={(data) => this.setState({ customer: data })}
        />
      );
    }
    if (this.state.page === 5) {
      return (
        <GardenHome2
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
          contract={this.props.contract}
          setContract={(gardenHomeSizeData) => {
            this.props.setContract({ gardenHomeSize: gardenHomeSizeData });
          }}
        />
      );
    }
    if (this.state.page === 55) {
      return (
        <GardenHome3
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
          contract={this.props.contract}
          setContract={(typeOfCladdingData) => {
            this.props.setContract({ typeOfCladding: typeOfCladdingData });
          }}
        />
      );
    }
    if (this.state.page === 6) {
      return (
        <GardenHome4
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
          contract={this.props.contract}
          setContract={(typeOfDoorsData) => {
            this.props.setContract({ typeOfDoors: typeOfDoorsData });
          }}
        />
      );
    }
    if (this.state.page === 7) {
      return (
        <GardenHome5
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
          contract={this.props.contract}
          setContract={(typeOfWindowsData) => {
            this.props.setContract({ typeOfWindows: typeOfWindowsData });
          }}
        />
      );
    }
    if (this.state.page === 8) {
      return (
        <GardenHome6
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
          contract={this.props.contract}
          setContract={(numberOfWindowsData) => {
            this.props.setContract({ numberOfWindows: numberOfWindowsData });
          }}
        />
      );
    }
    if (this.state.page === 9) {
      return (
        <GardenHome7
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
          contract={this.props.contract}
        />
      );
    }
    if (this.state.page === 10) {
      return (
        <Showhome
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
        />
      );
    }
    if (this.state.page === 11) {
      return (
        <Marketplace
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
        />
      );
    }
    if (this.state.page === 112) {
      return (
        <Marketplace2
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
        />
      );
    }
    if (this.state.page === 13) {
      return (
        <Marketplace3
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
        />
      );
    }
    if (this.state.page === 14) {
      return (
        <Marketplace4
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
        />
      );
    }
    if (this.state.page === 15) {
      return (
        <Marketplace5
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
        />
      );
    }
    if (this.state.page === 16) {
      return (
        <MarketplaceVideo
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
        />
      );
    }
    if (this.state.page === 17) {
      return (
        <GardenHome8
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
          contract={this.props.contract}
        />
      );
    }

    // if (this.state.page === 2) {
    // return (<Roofing pageChange={(pageNum) => this.setState({page: pageNum})} lead={this.state.lead} />);
    // }
    // if (this.state.page === 3) {
    // return (<RoofingProblems pageChange={(pageNum) => this.setState({page: pageNum})} lead={this.state.lead} />);
    // }
    // if (this.state.page === 4) {
    // return (<RoofingInstallation pageChange={(pageNum) => this.setState({page: pageNum})} lead={this.state.lead} />);
    // }

    // if (this.state.page === 6) {
    // return (<ReasonsForChange reasons={this.state.reasons} setReasons={(data) => this.setState({reasons: data})}  pageChange={(pageNum) => this.setState({page: pageNum})} lead={this.state.lead} setClose={() => this.setState({closeStatus1: !this.state.closeStatus1})} closeStatus={this.state.closeStatus1}/>);
    // }
    if (this.state.page === 11) {
      return (
        <Showhome
          reasons={this.state.reasons}
          setShowhome={(data) => this.setState({ showhome: data })}
          setCustomer={(data) => this.setState({ customer: data })}
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
        />
      );
    }
    if (this.state.page === 12) {
      return (
        <Marketplace
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
        />
      );
    }
    if (this.state.page === 13) {
      return (
        <Marketplace2
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
        />
      );
    }
    if (this.state.page === 14) {
      return (
        <Marketplace3
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
        />
      );
    }
    if (this.state.page === 15) {
      return (
        <Marketplace4
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
        />
      );
    }
    if (this.state.page === 16) {
      return (
        <Marketplace5
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
        />
      );
    }
    if (this.state.page === 17) {
      return (
        <MarketplaceVideo
          pageChange={(pageNum) => this.setState({ page: pageNum })}
          lead={this.state.lead}
          setClose={() =>
            this.setState({ closeStatus2: !this.state.closeStatus2 })
          }
          closeStatus={this.state.closeStatus2}
        />
      );
    }
  };
  render() {
    return <View style={S.container}>{this.pickPageToRender()}</View>;
  }
}
